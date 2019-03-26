<?php

declare(strict_types=1);

/**
 *
 * Проверкая является ли строка правильным MAC-адресом
 *
 * @param string $regex
 * @param string $inputString
 *
 * @return string
 */

function lineMACregex(string $inputString)
{
    if (!empty($inputString)) {
        $guid = '[a-f,\d]{2}\:[a-f,\d]{2}\:[a-f,\d]{2}\:[a-f,\d]{2}\:[a-f,\d]{2}\:[a-f,\d]{2}';
        $check = preg_match('#^' . $guid . '$#i', $inputString);
        if ($check === 1) {
            $result = 'Yes';
        } else {
            $result = 'No';
        }
        return $result;
    }

}


