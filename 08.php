<?php

declare(strict_types=1);

/**
 * Составить регулярное выражение, является ли заданная строка IP адресом, записанным в десятичном виде
 */

function lineIPregex(string $inputString)
{
    if (!empty($inputString)) {
        $check = preg_match('#^(?=.*[^\.]$)((25[0-5]|2[0-4]\d|[01]?\d\d?)\.?){4}$#', $inputString);
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

function lineIPphp($inputString)
{
    if (!empty($inputString)) {
        $check = filter_var($inputString, FILTER_VALIDATE_IP);

        if ($check !== false) {
            $result = 'Yes';
        } else {
            $result = 'No';
        }
        return $result;
    }
}

