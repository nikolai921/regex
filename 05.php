<?php

declare(strict_types=1);

/**
 *
 * Написать регулярное выражение определяющее является ли данная
 * строка шестнадцатиричным идентификатором цвета в HTML
 *
 * @param string $inputString
 *
 * @return string
 */

function lineHTMLregex(string $inputString)
{
    if (!empty($inputString)) {
        $guid = '\#[a-f\d]{6}';
        $check = preg_match('#' . $guid . '#i', $inputString);
        if ($check === 1) {
            $result = 'Yes';
        } else {
            $result = 'No';
        }
        return $result;
    }
}



