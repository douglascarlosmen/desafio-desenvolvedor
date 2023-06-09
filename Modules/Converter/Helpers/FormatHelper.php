<?php

namespace Modules\Converter\Helpers;

class FormatHelper
{
    /**
     * @param string $currencyString
     * @return float
     */
    public static function currencyStringToFloat(string $currencyString): float
    {
        $string = str_replace(['.', ','], ['', '.'], $currencyString);
        $floatValue = floatval($string);
        return $floatValue;
    }
}