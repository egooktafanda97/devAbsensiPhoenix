<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kantin;
use App\Helper\Helpers;
use Validator;
use App\Models\User;
use App\Models\Troli;
use App\Models\Product;
use App\Models\Transaksi;
use App\Models\RiwayatSaldo;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TroliController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }
    public function Created(Request $reqest)
    {
        $reqs = $reqest->all();

        $login = User::where([
            "pin"       => $reqs['pin'],
            "qr_code"   => $reqs['code']
        ])->count();
        if ($login != 1) {
            return response()->json([
                "type" => "error_auth",
                'status' => false,
                'message' => 'kartu atau pin anda salah',
                'data' => $reqs
            ], 401);
        } else if (!$this->validatesFunc($reqs)) {
            return response()->json([
                "type" => "error_validate",
                'status' => false,
                'message' => 'validation error',
                'data' => $reqs
            ], 401);
        } else {
            $kantin = DB::table('kantin')
                ->join('users', function ($join) {
                    $join->on('users.id', '=', 'kantin.user_id');
                })
                ->where('users.kode_instansi', auth()->user()->kode_instansi)
                ->where('kantin.user_id', auth()->user()->id)
                ->first();
            $saldo_awal_kantin = $kantin->saldo;

            $getUsers = User::where('id', $reqs['id_user'])->first();
            $saldo_awal_user = $getUsers->saldo;

            $total_cek = (float) 0;
            foreach (json_decode($reqest->beli, true) as  $value) {
                $barang = Product::where('id_product', $value['id_product'])->first();
                $total_cek += (float) $value['jumlah'] * (float) $barang->harga_produk;
            }

            if ($this->cekTransaksi($reqs['id_user'], $total_cek)) {
                return response()->json([
                    "type" => "error_time",
                    'message' => 'User ini sudah melakukan transaksi kurang dari 1 menit',
                    'status' => false,
                    'response' => [],
                ], 401);
            } else {
                if ($getUsers->saldo < $total_cek) {
                    return response()->json([
                        "type" => "error_saldo",
                        'saldo' => $getUsers->saldo,
                        'message' => 'Tidak dapat membyar , uang anda tidak cukup',
                        'status' => false,
                        'response' => [],
                    ], 401);
                } else {
                    $total = (float) 0;
                    $faktur = 'AHMD-' . Helpers::RandomNum(4) . '-' . Helpers::RandomNum(2);
                    foreach (json_decode($reqest->beli, true) as  $value) {
                        $barang = Product::where('id_product', $value['id_product'])->first();
                        $data = [
                            "id_instansi" => auth()->user()->kode_instansi,
                            "id_kantin" =>  $kantin->id_kantin,
                            "id_user" => $reqs['id_user'],
                            "id_product" => $value['id_product'],
                            "no_faktur" => $faktur,
                            "jumlah_product" => $value['jumlah'],
                            "status" => 'troli',
                        ];

                        $validator = Validator::make($data, [
                            "id_instansi" => 'required',
                            "id_kantin" => 'required',
                            "id_user" => 'required',
                            "id_product" => 'required',
                            "no_faktur" => 'required',
                            "jumlah_product" => 'required',
                            "status" => 'required',
                        ]);
                        if ($validator->fails()) {
                            Troli::where('no_faktur', $faktur)->delete();
                            return response()->json([
                                "type" => "error_troli",
                                'message' => 'data tidak valid',
                                'status' => false,
                                'response' => [],
                            ], 401);
                        } else {
                            Troli::create($validator->validated());
                            $total += (float) $value['jumlah'] * (float) $barang->harga_produk;
                        }
                    }

                    $transaction = [
                        "id_instansi"   => auth()->user()->kode_instansi,
                        "user_kantin"   => $kantin->id_kantin,
                        "id_user"       => $reqs['id_user'],
                        "kode_faktur"   => $faktur,
                        "total_bayar"   => $total,
                        "kode_request"  => $reqs['random_code'],
                        "tanggal"       => date("Y-m-d"),
                        "waktu"         => date("H:i:s"),
                        "status"        => "success"
                    ];
                    $validator_tr = Validator::make($transaction, [
                        "id_instansi"           => 'required',
                        "user_kantin"           => 'required',
                        "id_user"               => 'required',
                        "kode_faktur"           => 'required',
                        "total_bayar"           => 'required',
                        "kode_request"          => 'required',
                        "tanggal"               => 'required',
                        "waktu"                 => 'required',
                        "status"                => 'required'
                    ]);

                    if ($validator_tr->fails()) {
                        return response()->json([
                            "type" => "error_transaksi",
                            'message' => 'data tidak valid',
                            'status' => false,
                            'response' => [],
                        ], 401);
                    } else {
                        $Transaksi = new Transaksi($validator_tr->validated());
                        if ($Transaksi->save()) {
                            // kalkulasi 
                            $Calpenambahan = $kantin->saldo + $total;
                            $CalPengurangan = $getUsers->saldo - $total;
                            // mulai lakukan transaksi

                            $tambah_saldo = User::where('id', auth()->user()->id)->update([
                                "saldo"  => $Calpenambahan
                            ]);

                            $kurang_saldo = User::where('id', $reqs['id_user'])->update([
                                "saldo"  => $CalPengurangan
                            ]);

                            if ($tambah_saldo == true && $kurang_saldo == true) {
                                // -> tambah
                                $saldo_tambah = [
                                    "id_user" => auth()->user()->id,
                                    "kode_instansi" => auth()->user()->kode_instansi,
                                    "tanggal" => date('Y-m-d'),
                                    "times" => date('H:i:s'),
                                    "aksi" => "penambahan_saldo",
                                    "pesan" => "penambahan saldo transaksi pembelian",
                                    "oleh" => $reqs['id_user'],
                                    "saldo_awal" => $kantin->saldo,
                                    "saldo" =>  User::where('id', auth()->user()->id)->first()->saldo,
                                    "jumlah_aksi" => $total,
                                    "kode_request" => $reqs['random_code'],
                                    "kode_faktur" => $faktur,
                                    "status" => "success"
                                ];
                                // ->kurang 
                                $saldo_kurang = [
                                    "id_user" => $reqs['id_user'],
                                    "kode_instansi" => $getUsers->kode_instansi,
                                    "tanggal" => date('Y-m-d'),
                                    "times" => date('H:i:s'),
                                    "aksi" => "pengurangan_saldo",
                                    "pesan" => "pengurangan saldo transaksi pembelian pada kantin " . $kantin->nama_kantin,
                                    "oleh" => auth()->user()->id,
                                    "saldo_awal" => $getUsers->saldo,
                                    "saldo" => User::where('id', $reqs['id_user'])->first()->saldo,
                                    "jumlah_aksi" => $total,
                                    "kode_request" => $reqs['random_code'],
                                    "kode_faktur" => $faktur,
                                    "status" => "success"
                                ];

                                $riwayat_tambah = new RiwayatSaldo($saldo_tambah);
                                $r_tambah =  $riwayat_tambah->save();

                                $riwayat_kurang = new RiwayatSaldo($saldo_kurang);
                                $r_kurang = $riwayat_kurang->save();

                                if ($r_tambah == true && $r_kurang == true) {
                                    $get = DB::table('troli')
                                        ->select(['*'])
                                        ->join('product', function ($join) {
                                            $join->on('product.id_product', '=', 'troli.id_product');
                                        })
                                        ->where('troli.no_faktur', $faktur)
                                        ->get();

                                    return response()->json([
                                        'message'    => 'troli is insert true',
                                        'response'   => [
                                            "result" => $get,
                                            "faktur" => $faktur,
                                            "transaksi" => $Transaksi,
                                            "total"     => $total,
                                            "id_user"   => $reqs['id_user'],
                                        ],
                                        "status"     => true
                                    ], 200);
                                } else {
                                    Troli::where('no_faktur', $faktur)->delete();
                                    Transaksi::where("kode_faktur", $faktur)->delete();
                                    RiwayatSaldo::where('kode_request', $reqs['random_code'])->delete();
                                    if (User::where('id', auth()->user()->id)->first()->saldo > $saldo_awal_kantin) {
                                        $tambah_saldo = User::where('id', auth()->user()->id)->update([
                                            "saldo"  => $saldo_awal_kantin
                                        ]);
                                    }
                                    if (User::where('id', $reqs['id_user'])->first()->saldo > $saldo_awal_user) {
                                        User::where('id', $reqs['id_user'])->update([
                                            "saldo"  => $saldo_awal_user
                                        ]);
                                    }
                                    return response()->json([
                                        "type" => "error_save_riwayat",
                                        'message' => 'gagal transaksi',
                                        'status' => false,
                                        'response' => [],
                                    ], 401);
                                }
                            } else {
                                Troli::where('no_faktur', $faktur)->delete();
                                Transaksi::where("kode_faktur", $faktur)->delete();

                                if (User::where('id', auth()->user()->id)->first()->saldo > $saldo_awal_kantin) {
                                    $tambah_saldo = User::where('id', auth()->user()->id)->update([
                                        "saldo"  => $saldo_awal_kantin
                                    ]);
                                }
                                if (User::where('id', $reqs['id_user'])->first()->saldo > $saldo_awal_user) {
                                    User::where('id', $reqs['id_user'])->update([
                                        "saldo"  => $saldo_awal_user
                                    ]);
                                }

                                return response()->json([
                                    "type" => "error_calculate_saldo",
                                    'message' => 'gagal transaksi',
                                    'status' => false,
                                    'response' => [],
                                ], 401);
                            }
                        } else {
                            Troli::where('no_faktur', $faktur)->delete();
                            return response()->json([
                                "type" => "error_product",
                                'message' => 'gagal',
                                'status' => false,
                                'response' => [],
                            ], 401);
                        }
                    }

                    // ------- riwayat saldo -------------------------
                }
            }
        }
    }
    public function validatesFunc($reqs)
    {
        if (empty($reqs['random_code'])) {
            return false;
        } else if (RiwayatSaldo::where(["id_user" => $reqs['id_user'], "aksi" => "pengurangan_saldo", "kode_request" => $reqs['random_code']])->count() > 0) {
            return false;
        } else if (RiwayatSaldo::where(["oleh" => $reqs['id_user'], "aksi" => "penambahan_saldo", "kode_request" => $reqs['random_code']])->count() > 0) {
            return false;
        } else {
            return true;
        }
    }
    public function cekTransaksi($reqs, $total)
    {
        $ri =  Transaksi::where(["id_user" => $reqs, "total_bayar" => $total])->get();
        $disk = false;
        foreach ($ri as $key => $value) {
            $startTime = Carbon::createFromFormat('Y-m-d H:i:s', $value->created_at);;
            $endTime = Carbon::now()->format('Y-m-d H:i:s');
            if ($startTime->diffinseconds($endTime) < 30) {
                $disk = true;
            }
        }
        return $disk;
    }
}
