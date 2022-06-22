<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Models\Guru;
use App\Models\User;
use App\Models\Staff;
use Excel;
use Carbon\Carbon;
use DateTime;
use Validator;
use Illuminate\Support\Str;
use App\Models\BulkDataUser;


use Illuminate\Support\Facades\DB;


class GuruController extends Controller
{
    public function Inisiasi(Request $request)
    {

        $data = Excel::toArray(new UsersImport(), $request->excel);

        $init_data = $data[0];
        unset($init_data[0]);

        $keys_ar = [];
        foreach ($data[0][0] as $keys) {
            if ($keys != null) {
                array_push($keys_ar, $keys);
            }
        }
        $compiles = [];
        foreach ($init_data as  $value) {
            $newAr = [];
            for ($i = 0; $i <= count($keys_ar) - 1; $i++) {
                $newAr += [$keys_ar[$i] => $value[$i]];
            }
            array_push($compiles, $newAr);
        }

        $title = [
            "Nama_Lengkap",
            "NIK",
            "No_Passport",
            "LP",
            "Tempat_Lahir",
            "Tanggal_Lahir",
            "Nama_Ayah_Kandung",
            "Nama_Ibu_Kandung",
            "NoTelp",
            "Email",
            "Alamat",
            "Pendidikan_Terakhir",
            "Nama_SekolahPerguruan_Tinggi",
            "Tahun_Lulus",
            "Program_Studi",
            "Pernah_PesantrenTidak",
            "Nama_Pesantren_Jika_pernah",
            "Tugas_Utama",
            "Jabatan",
            "Bidang_Studi_yang_Diajarkan",
            "Status_Kepegawaian",
            "NIP",
            "PangkatGolongan",
            "Mulai_Bertugas_",
            "Status_Penugasan",
            "NUPTK",
            "NPK",
            "PegId",
            "No_KK",
            "Status_Perkawinan",
            "Nama_SuamiIstri",
            "NIK_SuamiIstri",
            "Pendidikan_Terakhir_SuamiIstri",
            "Pekerjaan_SuamiIstri",
            "Jumlah_Anak",
        ];
        $build_array = [];
        $index = 0;
        foreach ($compiles as $key_ => $value) {
            $iz = [];
            $__in = 0;
            if ($value['Nama Lengkap'] == null) {
                continue;
            }
            foreach ($value as $key => $value_) {
                if ($key == "NO") {
                    continue;
                }
                $iz += [$title[$__in] => $title[$__in] == "Tanggal_Lahir" ? gmdate("Y-m-d", ((int) $value[$key] - 25569) * 86400) : $value[$key]];
                $__in++;
            }

            array_push($build_array, $iz);
            $index++;
        }
        $results = [];
        $berhasil = [];
        $gagal    = [];
        foreach ($build_array as $key => $buildData) {
            $___init___ = $buildData;


            $reqs = [
                'nama_lengkap'  => $___init___['Nama_Lengkap'],
                'tmp_lahir'     => $___init___['Tempat_Lahir'],
                'tgl_lahir'     => $___init___['Tanggal_Lahir'],
                'jenis_kelamin' => $___init___['LP'],
                'agama'         => "Islam",
                'alamat_rumah'  => $___init___['Alamat'],
                'telepon'       => $___init___['NoTelp'],
                'id_jabatan'    => $___init___['Jabatan'],
                'nip'   => $___init___['NIP'],
                'tgl_masuk' => null,
                'unit_konsentrasi' => $___init___['Bidang_Studi_yang_Diajarkan'],
                'status_guru' => "YA",
                'status_mengajar' => "YA",
                'status_pns' => $___init___['Status_Kepegawaian'] == "Non PNS" ? "TIDAK" : "YA",
                'status_staff' => 'active',
                'table_relation' => "guru"
            ];

            $user = $this->UserIns($___init___['NIK']);
            $combo = array_merge(\App\Helper\Helpers::objectToArray($___init___), ["id_user" => $user->id, "kode_instansi" => auth()->user()->kode_instansi], \App\Helper\Helpers::objectToArray($user));
            $createds = $this->Created($combo);

            if ($createds['response'] == false) {
                array_push($gagal, $combo);
            } else {
                $staff = $this->Staf(array_merge($reqs, ["id_user" => $user->id, "kode_instansi" => auth()->user()->kode_instansi, "id_relation" => $createds['response']['id']]));
                $resData = [
                    "user" => $user,
                    "guru" => $createds,
                    "staf" => $staff,
                    "combo" => array_merge(\App\Helper\Helpers::objectToArray($user), \App\Helper\Helpers::objectToArray($createds), \App\Helper\Helpers::objectToArray($staff))
                ];
                array_push($berhasil, $resData);
            }
            array_push($results, $combo);
        }
        return response()->json([
            "berhasil" => $berhasil,
            "gagal" => $gagal,
            "all" => $results
        ]);
    }
    public function validateDate($date, $format = 'd/m/Y')
    {
        $d = DateTime::createFromFormat($format, $date);
        // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
        return $d && $d->format($format) === $date;
    }
    public function Created($data)
    {
        $validator = Validator::make($data, [
            "kode_instansi" => "required",
            "id_user" => "required",
            "Nama_Lengkap" => "nullable",
            "NIK" => "nullable",
            "No_Passport" => "nullable",
            "LP" => "nullable",
            "Tempat_Lahir" => "nullable",
            "Tanggal_Lahir" => "nullable",
            "Nama_Ayah_Kandung" => "nullable",
            "Nama_Ibu_Kandung" => "nullable",
            "Alamat" => "nullable",
            "Pendidikan_Terakhir" => "nullable",
            "Nama_SekolahPerguruan_Tinggi" => "nullable",
            "Tahun_Lulus" => "nullable",
            "Program_Studi" => "nullable",
            "Pernah_PesantrenTidak" => "nullable",
            "Nama_Pesantren_Jika_pernah" => "nullable",
            "Tugas_Utama" => "nullable",
            "Jabatan" => "nullable",
            "Bidang_Studi_yang_Diajarkan" => "nullable",
            "Status_Kepegawaian" => "nullable",
            "NIP" => "nullable",
            "PangkatGolongan" => "nullable",
            "Mulai_Bertugas_" => "nullable",
            "Status_Penugasan" => "nullable",
            "NUPTK" => "nullable",
            "NPK" => "nullable",
            "PegId" => "nullable",
            "No_KK" => "nullable",
            "Status_Perkawinan" => "nullable",
            "Nama_SuamiIstri" => "nullable",
            "NIK_SuamiIstri" => "nullable",
            "Pendidikan_Terakhir_SuamiIstri" => "nullable",
            "Pekerjaan_SuamiIstri" => "nullable",
            "Jumlah_Anak" => "nullable",
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        $data =  $validator->validated();

        try {
            $ins = Guru::create(array_merge($data));
            return [
                "data" => $data,
                "response" => $ins
            ];
        } catch (\Throwable $th) {
            $ins = User::where('id', $data['id_user'])->delete();
            return [
                "data" => $data,
                "response" => false
            ];
        }
    }
    public function UserIns($nik)
    {
        $username = "GURU-" . Str::random(4) . '-' . Str::random(2);
        $reqs = [
            "kode_instansi" => auth()->user()->kode_instansi
        ];

        // upload image ======
        $upl = $nik . '.jpg';
        // remember token 
        $random = Str::random(40);

        $data = [
            'kode_instansi' => auth()->user()->kode_instansi,
            'username' => $username,
            'role' => "STAFF",
            'password' => bcrypt('password'),
            "pin" => "1234",
            "qr_code" => null,
            "remember_token" => $random,
            "status_user" => "isActive",
            "user_join" => 1,
            "name_table_join" => 'staff',
            "saldo" => 0,
            'foto' => $upl
        ];

        $validator = Validator::make($data, [
            'username' => 'required|string|max:100|unique:users',
            "qr_code"  => 'nullable|string|unique:users',
            'password' => 'required|string|min:6',
            'role'     => 'required|string',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $user = User::create($data);
        return $user;
    }
    public function Staf($request)
    {

        $reqs = $request;

        $validator2 = Validator::make($reqs, [
            'id_user'       => 'required',
            'kode_instansi' => 'required',
            'nama_lengkap'  => 'required',
            'tmp_lahir'     => 'required',
            'tgl_lahir'     => 'required',
            'jenis_kelamin' => 'required',
            'agama'         => 'required',
            'alamat_rumah'  => 'required',
            'telepon'       => 'required',
            'id_jabatan'    => 'required',
            'table_relation' => 'required',
            'id_relation'    => 'required',
        ]);
        $req = array_merge($validator2->validated(), [
            'nip'   => $request['nip'],
            'tgl_masuk' => $request['tgl_masuk'],
            'unit_konsentrasi' => $request['unit_konsentrasi'],
            'status_guru' => $request['status_guru'],
            'status_mengajar' => $request['status_mengajar'],
            'status_pns' => $request['status_pns'],
            'status_staff' => 'active',
        ]);

        if ($validator2->fails()) {
            return $validator2->errors();
        }
        $staf = Staff::create($req);
        return $staf;
    }

    public function bulk_data_user()
    {
        $gets = Guru::all();

        $d = [];
        $i = 1;
        foreach ($gets as $key => $value) {
            $shorturl = 0;
            do {
                $shorturl = $this->randStr(10);
                $ck = BulkDataUser::where('nis', $shorturl)->count();
            } while ($ck > 0);
            $no = $i++;
            $data = [
                "nama" => $value->Nama_Lengkap,
                "nis" => $shorturl,
                "qrcode" => "guru_ppad_" . str_pad($no, 3, '0', STR_PAD_LEFT) . "_oncard.png",
                "foto" => $value->NIK . '.jpg',
                "dateCreated" => date('Y-m-d H:i:s'),
            ];
            $res = BulkDataUser::create($data);
            array_push($d, $res);
        }
        return response()->json($d);
    }
    public function bulk_data_guru(Request $request)
    {
        $data = Excel::toArray(new UsersImport(), $request->excel);

        $init_data = $data[0];
        unset($init_data[0]);

        $keys_ar = [];
        foreach ($data[0][0] as $keys) {
            if ($keys != null) {
                array_push($keys_ar, $keys);
            }
        }
        $compiles = [];
        foreach ($init_data as  $value) {
            $newAr = [];
            for ($i = 0; $i <= count($keys_ar) - 1; $i++) {
                $newAr += [$keys_ar[$i] => $value[$i]];
            }
            array_push($compiles, $newAr);
        }


        $d = [];
        $i = 1;
        $errr = [];
        foreach ($compiles as $key => $value) {
            $no = $i++;
            $data = [
                "nama" => $value['Nama'],
                "nis" => $value['NIK'],
                "qrcode" => "guru_ppad_" . str_pad($no, 3, '0', STR_PAD_LEFT) . "_oncard.png",
                "foto" => $value['NIK'] . '.jpg',
                "dateCreated" => date('Y-m-d H:i:s'),
            ];
            try {
                $res = BulkDataUser::create($data);
                array_push($d,  $res);
            } catch (\Throwable $th) {
                array_push($data, $errr);
            }
        }
        return response()->json([
            "success" => $d,
            "error" => $errr
        ]);
    }
    public function randStr($length = 6)
    {
        $characters = '123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $pin = $randomString;
        return $pin;
    }

    // geter
    public function getGuruAll()
    {
        // perbaikan data
        $get = DB::table('staff')
            ->join('guru', function ($join) {
                $join->on('staff.id_staf', '=', 'guru.id_staff');
            })
            ->where('staff.kode_instansi', auth()->user()->kode_instansi)
            ->get();
        return response()->json([
            "result" => $get,
            "jumlah" => count($get)
        ]);
    }
    public function getByid($id_staff)
    {
        $get = DB::table('staff')
            ->join('guru', function ($join) {
                $join->on('staff.id_staf', '=', 'guru.id_staff');
            })
            ->where(["staff.id_staf" => $id_staff])
            ->first();
        return response()->json([
            "result" => $get,
        ]);
    }
    public function getBySearch()
    {
        if (!empty($_GET['search'])) {
            return response()->json([
                "result" => "search not found",
                "status" => "error"
            ], 401);
        }
        $get = DB::table('staff')
            ->join('guru', function ($join) {
                $join->on('staff.id_staf', '=', 'guru.id_staff');
            })
            ->where('staff.nama_lengkap', 'like', '%' . $_GET['nama'] . '%')
            ->get();
        return response()->json([
            "result" => $get,
            "jumlah" => count($get)
        ]);
    }
    public function konesi_kartu_(Request $request)
    {
        $guru = Guru::where('NIK', $request->nik)->first();

        // generator user free from super admin
        if (!empty($guru->NIK)) {
            $random = Str::random(40);
            $data = [
                'username' => $guru->NIK,
                'kode_instansi' => auth()->user()->kode_instansi,
                'role' => 'STAFF',
                'password' => bcrypt($guru->NIK),
                "pin" => "1234",
                "qr_code" => $request->qrCode,
                "remember_token" => $random,
                "status_user" => "isActive",
                "user_join" => 1,
                'foto' => 'default.jpg',
                'saldo' => $request->saldo,
                'name_table_join' => 'staff'

            ];
            try {
                $user = User::create($data);
                Guru::where('NIK', $request->nik)->update(["id_user" => $user->id]);
                $staf = Staff::where('id_staf', $guru->id_staff)->update(["id_user" => $user->id]);
                return response()->json([
                    "response" => $user,
                    "status" => true
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    "response" => "error",
                    "status" => false

                ]);
            }
        }
    }
    // public function getGuruTableConnet($nis = null)
    // {
    //     try {
    //         if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
    //             return response()->json(['error' => 'You don\'t have access'], 401);
    //         }
    //         $get = DB::table('tbl_siswa');
    //         $get->select(DB::raw('nis,nama_siswa,tgl_lahir,jk,kelas'));
    //         $get->join('users', function ($join) {
    //             $join->on('users.id', '=', 'tbl_siswa.id_user');
    //         });

    //         if (!empty($_GET['nis'])) {
    //             $get->where('tbl_siswa.nis', 'like', '%' . $_GET['nis'] . '%');
    //         }

    //         $get->where('tbl_siswa.kode_instansi', auth()->user()->kode_instansi);
    //         $result = $get->get();



    //         $__ = [];
    //         foreach ($result as $value) {
    //             $data___ = [
    //                 "<small>".$value->nis."</small><br/>".$value->nama_siswa,

    //                 $value->kelas,
    //                 '<div class="badge badge-success">Connected</div>'
    //             ];
    //             array_push($__, $data___);
    //         }
    //         $array_respon_datatable = [
    //             "draw" => 1,
    //             "recordsTotal" => count($result),
    //             "recordsFiltered" => count($result),
    //             "data" => $__
    //         ];

    //         return response()->json($array_respon_datatable, 200);
    //     } catch (\Throwable $th) {
    //         return response()->json(["response" => "error", "msg" => "server error"], 500);
    //     }
    // }
}
