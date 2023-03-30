<?php

if (!function_exists('get_code_group')) {
    function get_code_group($code)
    {
        return \App\Models\ComCode::where('code_group', $code)->pluck('code_nm', 'code_cd');
    }
}

if (!function_exists('atasan')) {
    function atasan($code)
    {
        return \App\Models\Atasan::where('id', $code)->pluck('nama', 'id');
    }
}

if (! function_exists('is_mobile')) {
    function is_mobile()
    {
        $detect = new Mobile_Detect;
        return $detect->isMobile();
    }
}
if (! function_exists('konversiTanggal')) {
    function konversiTanggal($bulan){
        switch ($bulan) {
                case "01":
                    return 'Januari';
                    break;
                case "02":
                    return 'Februari';
                    break;
                case "03":
                    return 'Maret';
                    break;
                case "04":
                    return 'April';
                    break;
                case "05":
                    return 'Mei';
                    break;
                case "06":
                    return 'Juni';
                    break;
                case "07":
                    return 'Juli';
                case "08":
                    return 'Agustus';
                    break;
                case "09":
                    return 'September';
                    break;
                case "10":
                    return 'Oktober';
                    break;
                case "11":
                    return 'November';
                    break;
                case "12":
                    return 'Desember';
                    break;
                }
    }
}