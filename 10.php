<?php

declare(strict_types=1);

/**
 * Проверить является ли заданная строка шестизначным числом,
 * записанным в десятичной системе счисления без нулей в старших разрядах.
 */

function lineNumberRegex(string $inputString)
{
    if (!empty($inputString)) {
        $check = preg_match('#^[1-9]\d{5}$#', $inputString);
        if ($check === 1) {
            $result = 'Yes';
        } else {
            $result = 'No';
        }
        return $result;
    }
}

/**
 * Не используя регулярные выражения
 */

function lineNumberPhp(string $inputString)
{
    if (!empty($inputString)) {
        $length = strlen($inputString);
        $leadingDigit = (int)$inputString[0];

        if ($length === 6 && $leadingDigit !== 0) {
            $check = ctype_digit($inputString);
            if ($check !== false) {
                $result = 'Yes';
            } else {
                $result = 'No';
            }
        } else {
            $result = 'No';
        }
        return $result;
    }
}

