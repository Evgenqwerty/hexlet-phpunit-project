<?php

namespace Hexlet\Phpunit\Utils;

// Эта функция переворачивает переданную строку
function reverseString($string)
{
    return implode(array_reverse(mb_str_split($string)));
}
