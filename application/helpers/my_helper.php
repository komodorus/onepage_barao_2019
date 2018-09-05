<?php 

function clean($string)
{
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

    $result = preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.

    return str_replace('-', ' ', $result);
}

if (!function_exists('mb_ucfirst')) {
    function mb_ucfirst($string, $encoding)
    {
        $strlen = mb_strlen($string, $encoding);
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $then = mb_substr($string, 1, $strlen - 1, $encoding);
        return mb_strtoupper($firstChar, $encoding) . $then;
    }
}

if (!function_exists('is_even')) {
    function is_even($num)
    {
        if($num % 2 == 0){
            return true;
        }

        return false;
    }
}
if (!function_exists('get_detalhes')) {
    function get_detalhes($string)
    {
        $data = array_filter(preg_split("/\\r\\n|\\r|\\n|;/", trim($string)));

        foreach ($data as $key => $value) {
            if ($value == ' ') {
                unset($data[$key]);
            }
        }

        return $data;
    }
}

