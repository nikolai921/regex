<?php

declare(strict_types=1);

/**
 *
 * Проверить является ли заданная строка шестизначным числом,
 * записанным в десятичной системе счисления без нулей в старших разрядах.
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineNumberRegex(string $inputString): bool
{
    return (preg_match('#^[1-9]\d{5}$#', $inputString) === 1);
}

/**
 *
 * Не используя регулярные выражения
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineNumberPhp(string $inputString): bool
{
    $inputStringIntType = (int)$inputString;
    return (($inputStringIntType > 99999 && $inputStringIntType < 999999) !== false);
}

