<?php
namespace KDAM\KhmerFormat\Utils;

use KDAM\KhmerFormat\Constraints\Numeric;
class NumericUtil {

     /**
     * Convert 
     *
     * @param $number
     * @return string
     */
    public static function numbers($number)
    {
        $num = array_map(function ($str) {
            return Numeric::$numeric[(int)$str];
        }, str_split((string)$number));

        return implode('', $num);
    }
}