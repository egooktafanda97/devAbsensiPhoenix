<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Helper\Ipaymu;
use App\Models\User;
use Validator;
use Illuminate\Support\Str;
use App\Models\Instansi;
use Illuminate\Support\Facades\DB;
use App\Models\Kantin;
use App\Models\tbl_siswa;
use App\Models\RiwayatSaldo;
use App\Models\PaymentTransaksi;
use App\Http\Controllers\Package;
use App\Models\Notification;

class PaymentController extends Controller
{

    public $notif = "https://oncard.phoenixkreatifdigital.com/engine/api/payment/reponse-bank";
    public function __construct()
    {
        // Ipaymu::setKey("1BFB4131-ED38-4FD5-883B-C99876503CE3");
        // Ipaymu::setKey("5F446413-B4AB-4F1D-9423-BB4E70E67D01");
        // ahmaddahlan
        Ipaymu::setKey("01F610F1-71C4-4304-B117-B7DF218E81AA");
        $this->middleware('auth:api', ['except' => ['ResponseTransfer']]);
    }
    public function random($length = 8)
    {
        $data = 'ABCDEFGHIJKLMNOPQRSTU1234567890';
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $pos = rand(0, strlen($data) - 1);
            $string .= $data[$pos];
        }
        return $string;
    }
    public function CreateVaTransfer(Request $request)
    {
        $key_ref = "AHM-" . $this->random(3) . "-" . $this->random(4);

        $reqPost = $request->all();
        $reqPost += ["key_ref" => $key_ref];

        $prices = Ipaymu::replace_last_character($request->priece, 3);
        $cekCount = PaymentTransaksi::where(['jumlah' => $prices, 'status_transaksi' => 'PENDING'])->get();
        $price = $prices;

        $email = !empty($request->email) ? $request->email : (!empty(auth()->user()->email) ? auth()->user()->email : 'egooktafanda97@gmail.com');

        while (count($cekCount) > 0) {
            $newPriece = Ipaymu::replace_last_character($request->priece, 3);
            $cekCount = PaymentTransaksi::where('jumlah', $newPriece)->get();
            $price = $newPriece;
            if (count($cekCount) == 0) {
                break;
            }
        }

        $tr = '';
        if ($request->method == 'BNI') {
            $reqPost += ["method" => "transfer_bank", "provider" => "bni"];
            $data = [
                "customer_name"   => $key_ref,
                "customer_email"  => $email,
                "customer_phone"  => "082284733404",
                "price"           => $price,
                "notify_url"      => $this->notif,
                "expired"         => 24
            ];
            $tr = json_decode(Ipaymu::Bni($data), true);
        } else if ($request->method == 'Mandiri') {
            $reqPost += ["method" => "transfer_bank", "provider" => "Mandiri"];
            $data = [
                "customer_name"   => $key_ref,
                "customer_email"  => $email,
                "customer_phone"  => "082284733404",
                "price"           => $price,
                "notify_url"      => $this->notif,
                "expired"         => 24
            ];
            $tr = json_decode(Ipaymu::Mandiri($data), true);
        } else if ($request->method == 'BCA') {
            $reqPost += ["method" => "transfer_bank", "provider" => "BCA"];
            $data = [
                "notifyUrl"     => $this->notif,
                "name"          => $key_ref,
                "phone"         => "082284733404",
                "email"         => $email,
                "amount"        => $price,
                "expired"         => 24
            ];
            $tr = json_decode(Ipaymu::BCA($data), true);
        } else if ($request->method == 'AlfaIndo') {
            $reqPost += ["method" => "alfamart-indomaret", "provider" => "AlfaIndo"];
            $post_sessionId = [
                "product[]"   => 'Deposit Saldo',
                "quantity[]"  => '1',
                "price[]"     => $price,
                "unotify"     => $this->notif,
                "pay_method"  => "cstore"
            ];
            $get_session_Id = json_decode(Ipaymu::session_Id($post_sessionId), true);

            $data = [
                "sessionID" => $get_session_Id->sessionID,
                "channel"   => "alfamart",
                "name"          => $key_ref,
                "phone"         => "082284733404",
                "email"         => $email,
                "active"    => 24
            ];
            $tr = json_decode(Ipaymu::AlfaIndo($data), true);
        } else if ($request->method == 'Ewallet') {
            $reqPost += ["method" => "Ewallet", "provider" => "qris"];
            $data = [
                "name"          => $key_ref,
                "phone"         => "082284733404",
                "email"         => $email,
                "amount"      => $price,
                "notifyUrl"   => $this->notif,
                "referenceId" => "1233313131",
                "zipCode"     => "25524",
                "city"        => "kuantan Singingi"
            ];
            $tr = json_decode(Ipaymu::Ewallet($data), true);
        }

        $res = ["kode_ref" => $key_ref, "method" => "Ewallet", "provider" => "qris"];

        $reqPost += ["it_get" => http_build_query($res), "jumlah" => $price];

        $results = $this->PaymentTransaksi($reqPost, $tr);

        return response()->json($results);
    }
    public function ResponseTransfer(Request $request)
    {
        
        $notif = $request->all();
        // return response()->json($notif);
        $this->TestResponse(["response"=> json_encode($notif)]);
        $idSes = "";
        $fee = 5000;
        if ($notif['channel'] == 'bca') {
            $idSes = $notif['sid'];
            $fee = $notif['fee'];
        } else if ($notif['channel'] == 'mandiri') {
            $idSes = $notif['reference_id'];
            $fee = $notif['fee'];
        } else if ($notif['channel'] == 'bni') {
            $idSes = $notif['reference_id'];
            $fee = $notif['fee'];
        }

        $q = PaymentTransaksi::where('reference_id', $idSes)->first();
       
        if (!empty($q) && $q->status_transaksi == "PENDING") {
            $status = "";
            $pesan  = "";
            $total  = "";
            if ((float) $q->jumlah == $notif['amount']) {
                $status = "valid";
                $pesan  = "transaksi berhasil";
                $total  = $q->jumlah;
                $user_tujuan = User::where('id', $q->id_tujuan)->first();

                $pengirim = Package::getUserJoin($q->id_user);
                $penerima = Package::getUserJoin($q->id_tujuan);

                // payment =============================================================
                PaymentTransaksi::where('reference_id', $idSes)->update([
                    "status" => "SUCCESS",
                    "status_transaksi" => "SUCCESS"
                ]);
            

                $us = User::where('id', $q->id_tujuan)->update([
                    "saldo" => (float) $user_tujuan->saldo + ((float) $total - (float) $fee),
                ]);
                if ($us) {
                    // notiff =============================================================
                    $this->Notif($q, $q->id_user, $q->id_user, "Transfer anda berhasil ke " . $penerima->nama_user . " sejumlah " . $this->rupiah((float) $total - (float) $fee));
                    $this->Notif($q, $q->id_user, $q->id_tujuan, "anda menerima trasfer dari " . $pengirim->nama_user . " sejumlah " . $this->rupiah((float) $total - (float) $fee));


                    $data = [
                        'id_user' => $q->id_user,
                        'kode_instansi' => $q->kode_instansi,
                        'id_user_tujuan' => $q->id_tujuan,
                        'response' => json_encode($notif),
                        "kode_reference" => $q->key_reference,
                        "reference_id" => $idSes,
                        "status" => $status,
                        "pesan" => $pesan,
                        "total" => $total,
                        "biaya_payment" => $fee,
                        "sum_total" => (float) $total - (float) $fee
                    ];
                    $py = Payment::create($data);
                    // riwayat ===========================================================
                    $riwayat_transfer = [
                        "id_user" => $q->id_user,
                        "kode_instansi" => $q->kode_instansi,
                        "tanggal" => date('Y-m-d'),
                        "aksi" => "transfer_payment",
                        "pesan" => "anda melakukan transfer ke " . $penerima->nama_user . " melalui payment provider " . json_decode($q->method, true)['method'],
                        "oleh" => $q->id_user,
                        "saldo_awal" => "",
                        "saldo" => "",
                        "jumlah_aksi" => "",
                        "jenis_saldo" => "transfer_payment",
                        "id_payment" => $py->id
                    ];

                    // kalkulasi 
                    $riwayat_tujuan_transfer = [
                        "id_user" => $q->id_tujuan,
                        "kode_instansi" => $q->kode_instansi,
                        "tanggal" => date('Y-m-d'),
                        "aksi" => "transfer",
                        "pesan" => "penambahan saldo melalui payment dari " . $pengirim->nama_user,
                        "oleh" => $q->id_user,
                        "saldo_awal" => $user_tujuan->saldo,
                        "saldo" => (float)$user_tujuan->saldo + ((float) $total - (float) $fee),
                        "jumlah_aksi" => ((float) $total - (float) $fee),
                        "jenis_saldo" => "transfer_payment",
                        "id_payment" => $py->id
                    ];

                    RiwayatSaldo::create($riwayat_transfer);
                    RiwayatSaldo::create($riwayat_tujuan_transfer);

                    // bank
                    Instansi::where('kode_instansi', $q->kode_instansi)->update([
                        "saldo_payment" => json_decode(Ipaymu::CekSaldo()['response']['Saldo'])
                    ]);
                }
            } else {
                $status = "in_valid";
                $pesan  = "total order tidak sama dengan total yg di kirim";
                $total  = $q->jumlah;

                $data = [
                    'id_user' => $q->id_user,
                    'kode_instansi' => $q->kode_instansi,
                    'id_user_tujuan' => $q->id_tujuan,
                    'response' => json_encode($notif),
                    "kode_reference" => $q->key_reference,
                    "reference_id" => $idSes,
                    "status" => $status,
                    "pesan" => $pesan,
                    "total" => $total,
                    "biaya_payment" => $fee,
                    "sum_total" => (float) $total - (float) $fee
                ];
                Payment::create($data);
            }
        }
    }
    public function PaymentTransaksi($request, $response)
    {
        if (empty($response)) {
            return [
                "status" => false,
                "error" => "method",
                "msg" => "method request notfound!",
            ];
        }
        $reqs = $request;

        if ($reqs['method'] == "BNI") {
            $displayName = $response['response']['displayName'];
            $va = $response['response']['va'];
            $idTr = $response['response']['referenceId'];
            $biaya_transaksi = 3500;
        } else if ($reqs['method'] == "BCA") {
            $displayName = $response['response']['Data']['PaymentName'];
            $va = $response['response']['Data']['PaymentNo'];
            $idTr = $response['response']['Data']['SessionId'];
            $biaya_transaksi = $response['response']['Data']['Fee'];
        } else if ($reqs['method'] == "Mandiri") {
            $displayName = $response['response']['displayName'];
            $va = $response['response']['va'];
            $idTr = $response['response']['referenceId'];
            $biaya_transaksi = 4000;
        } else {
            // $displayName = "-";
            // $va = $response['response']['Data']['PaymentNo'];
            // $idTr = $response['response']['Data']['SessionId'];
            return [
                "status" => false,
                "error" => "method",
                "msg" => "method request notfound!"
            ];
        }

        $data = [
            "key_reference"     => $reqs['key_ref'],
            "kode_instansi"     => auth()->user()->kode_instansi,
            "id_user"           => auth()->user()->id,
            "id_tujuan"         => $reqs['tujuan'],
            "jumlah"            => $request['jumlah'],
            "sub_jumlah"        => "-",
            "biaya_transaksi"   => $biaya_transaksi,
            "method"        => $reqs['method'],
            "provider"      => $reqs['provider'],
            "va"            => $va,
            "reference_id"  => $idTr,
            "display_name"  => $displayName,
            "expired_time"   => "24",
            "expired_at"     => date("Y-m-d H:i:s", strtotime('+24 hours')),
            "status"        => "pending",
            "request"       => json_encode($reqs),
            "response"      => json_encode($response),
            "it_get"        => $reqs['it_get'],
            "status_transaksi"  => "PENDING",
        ];

        $validator = Validator::make($data, [
            "key_reference" => 'required|string|max:100|unique:payment_transaksi',
            "kode_instansi" => 'required',
            "id_user" => 'required',
            "id_tujuan" => 'required',
            "jumlah" => 'required',
            "sub_jumlah" => 'required',
            "biaya_transaksi"   => 'required',
            "method" => 'required',
            "provider" => 'required',
            "va"      => 'required',
            "display_name"  => 'required',
            "reference_id" => 'required',
            "expired_at" => 'required',
            "status" => 'required',
            "request" => 'required',
            "response" => 'required',
            "it_get" => 'required',
            "status_transaksi" => 'required',
        ]);
        if ($validator->fails()) {
            return $validator->errors()->toJson();
        }
        $transaksi = PaymentTransaksi::create($validator->validated());
        return [
            'message'    => 'virtual account success created',
            'response'   => ["request" => $transaksi, "respon_pay" => $response],
            "status"     => true,
        ];
    }
    public function getTrasfer()
    {
        $tr = PaymentTransaksi::where([
            'kode_instansi' => auth()->user()->kode_instansi,
            'id_user'      => auth()->user()->id
        ])->orderBy('created_at', "DESC")->get();

        $tr = \App\Helper\Helpers::objectToArray($tr);
        $ar = [];
        $pending = [];
        $success = [];
        $all     = [];
        if (count($tr) > 0) {
            foreach ($tr as $value) {
                if ($value["status_transaksi"] == "PENDING") {
                    array_push($pending, array_merge($value, [
                        "tujuan" => Package::getUserJoin($value['id_tujuan'])
                    ]));
                } else if ($value["status_transaksi"] == "SUCCESS") {
                    array_push($success, array_merge($value, [
                        "tujuan" => Package::getUserJoin($value['id_tujuan'])
                    ]));
                }
                array_push($all, array_merge($value, [
                    "tujuan" => Package::getUserJoin($value['id_tujuan'])
                ]));
            }
        }

        return response()->json([
            "pending" => $pending,
            "success" => $success,
            "all"     => $all
        ]);
    }
    public function getTrasferbyKode($slug)
    {
        $tr = PaymentTransaksi::where([
            'kode_instansi' => auth()->user()->kode_instansi,
            'id_user'      => auth()->user()->id,
            "key_reference" => $slug
        ])->first();

        $tr = \App\Helper\Helpers::objectToArray($tr);
        $res = [];
        if ($tr != null) {
            $res = array_merge($tr, ["tujuan" => Package::getUserJoin($tr['id_tujuan'])]);
        }

        return response()->json($res);
    }
    public function CekSaldo()
    {
        $res = Ipaymu::CekSaldo();
        return response()->json($res);
    }

    public function Notif($request, $from, $to, $msg)
    {
        $reqs = $request;
        $data = [
            'kode_instansi' => $request['kode_instansi'],
            'id_user' => $from,
            'id_tujuan' => $to,
            'message' => $msg,
            'status' => "not_open",
            'redirect' => !empty($reqs['redirect']) ? $reqs['redirect'] : ''
        ];
        $validator = Validator::make($data, [
            'kode_instansi' => 'required',
            'id_user' =>  'required',
            'id_tujuan' => 'required',
            'message' =>  'required',
            'status' =>  'required',
        ]);
        if ($validator->fails()) {
            return [
                "error" => true,
                "msg" => $validator->errors()
            ];
        }

        $notif = Notification::create($data);

        return $notif;
    }
    public function rupiah($nominal)
    {
        $rp = "Rp. " . number_format($nominal, 2, ",", ".");
        return $rp;
    }
    public function TestResponse($data){
        DB::table('response_ipay')->insert($data);
    }
}
