<?php

function func___const($switch, $param = null)
{
    switch ($switch) {
        case 'api_url':
            return base_url('rest/api/' . $param);
            break;
        case 'server_url':
            return "https://devabsen.phoenixkreatifdigital.com/rest/api/" . $param;
            break;
        case 'key_api':
            return "d4PDu3P9e2WTAecDgtVsIR7PNdPmy8U4GdC8ZmKd";
            break;
        default:
            # code...
            break;
    }
}
