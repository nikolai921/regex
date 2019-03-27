<?php

declare(strict_types=1);

/**
 *
 * Проверкая, является ли строка правильным MAC-адресом
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineMacRegex(string $inputString): bool
{
    $guid = '[a-f,\d]{2}\:[a-f,\d]{2}\:[a-f,\d]{2}\:[a-f,\d]{2}\:[a-f,\d]{2}\:[a-f,\d]{2}';
    return (preg_match('#^' . $guid . '$#i', $inputString) === 1);
}


