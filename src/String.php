<?php

if (!function_exists('strMultipleSpaceClear')) {
    function strMultipleSpaceClear($value)
    {
        return preg_replace('!\s+!', ' ', $value);
    }
}
