<?php

if (!function_exists('strMultipleSpaceClear')) {
    function strMultipleSpaceClear(string $value): string
    {
        return preg_replace('!\s+!', ' ', $value);
    }
}
