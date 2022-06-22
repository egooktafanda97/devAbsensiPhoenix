<?php

namespace App\Helper;

class Ipaymu
{
    public static $api_key = "";

    public static function setKey($key)
    {
        static::$api_key =  $key;
    }

    // BNI
    public static function Bni($data)
    {
        $url = "https://my.ipaymu.com/api/getbniva";
        $static = [
            'key' => self::$api_key,
            'uniqid' => self::generate_uniqid_int(6)
        ];

        $push = $static + $data;
        // return $push;

        $request = self::Curl($url, $push);
        $response = [
            "data_request" => $push,
            "response"        => json_decode($request)
        ];

        return json_encode($response);
    }



    // bank Mnadiri
    public static function Mandiri($data)
    {
        $url = "https://my.ipaymu.com/api/getmandiriva";
        $static = [
            'key' => self::$api_key,
            'uniqid' => self::generate_uniqid_int(6)
        ];

        $push = $static + $data;
        // return $push;

        $request = self::Curl($url, $push);
        $response = [
            "data_request" => $push,
            "response"        => json_decode($request)
        ];

        return json_encode($response);
    }
    // bank BCA
    public static function BCA($data)
    {
        $url = "https://my.ipaymu.com/api/bcatransfer";
        $static = [
            'key' => self::$api_key,
            'amount' => $data['amount'],
            'uniqid' => self::generate_uniqid_int(6)
        ];

        unset($data['amount']);
        $push = $static + $data;
        // return json_encode($push); 
        // return $push;

        $request = self::Curl($url, $push);
        $response = [
            "data_request" => $push,
            "response"        => json_decode($request)
        ];

        return json_encode($response);
    }


    // alfamart dan indomaret

    public static function session_Id($data)
    {

        $url = "https://my.ipaymu.com/api/payment/getsid";
        $static = [
            'key' => self::$api_key,
        ];


        $push = $static + $data;
        // return json_encode($push); 
        // return $push;

        $request = self::Curl($url, $push);

        return $request;
    }

    public static function AlfaIndo($data)
    {

        $url = "https://my.ipaymu.com/api/payment/cstore";
        $static = [
            'key' => self::$api_key,
        ];


        $push = $static + $data;

        $request = self::Curl($url, $push);
        $response = [
            "data_request" => $push,
            "response"        => json_decode($request)
        ];

        return json_encode($response);
    }

    // //////////////////////

    // e-wallet ///////////////////
    public static function Ewallet($data)
    {

        $url = "https://my.ipaymu.com/api/payment/qris";
        $static = [
            'key' => self::$api_key,
        ];


        $push = $static + $data;

        $request = self::Curl($url, $push);
        $response = [
            "data_request" => $push,
            "response"        => json_decode($request)
        ];

        return json_encode($response);
    }
    // ///////////////////////////

    public static function CekSaldo()
    {

        $url = "https://my.ipaymu.com/api/saldo";
        $static = [
            'key' => self::$api_key,
            'format' => "JSON"
        ];

        $request = self::Curl($url, $static);
        $response = [
            "response"        => json_decode($request,true)
        ];

        return $response;
    }




    // //////////////////////////////////////////////////////////// library function
    // method CURL
    public static function Curl($url, $data, $method = "POST")
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => $data
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    public static function CurlNoParam($url, $method = "POST")
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    // method generator unix key kode
    public static function generate_uniqid_int($lenght)
    {
        $stamp = date("Ys");
        $characters = '0123456789';
        $randomString = '';
        for ($i = 0; $i < $lenght; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $stamp . $randomString;
    }
    // method generate random 3 angka paling blakang , berlaku untuk integer
    public static function replace_last_character($string, $jum_digit_terakhir = 1, $sub = null)
    {
        $arr_split = str_split($string);
        $jum_str = strlen($string);

        $replace_start = $jum_str - $jum_digit_terakhir;

        if ($replace_start < 0) {
            return $string;
        }

        $str_fmt = '';
        $subRand = '';
        for ($i = 0; $i < $jum_str; $i++) {
            if ($i < $replace_start) {
                $str_fmt .= $arr_split[$i];
            } else {
                $str_fmt .= substr(rand(), 1, 1);
                $subRand .= $str_fmt;
            }
        }

        if (!empty($sub)) {
            return ["result" => $str_fmt, "sub" => $subRand];
        }
        return $str_fmt;
    }
}
