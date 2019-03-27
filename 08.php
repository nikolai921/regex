<?php

declare(strict_types=1);

/**
 *
 * Составить регулярное выражение, является ли заданная строка IP адресом, записанным в десятичном виде
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineIPregex(string $inputString): bool
{
    return (preg_match('#^(?=.*[^\.]$)((25[0-5]|2[0-4]\d|[01]?\d\d?)\.?){4}$#', $inputString) === 1);
}

/**
 *
 * Не используя регулярные выражения
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineIpPhp(string $inputString)
{
    return (filter_var($inputString, FILTER_VALIDATE_IP) !== false);
}

