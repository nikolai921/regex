<?php

declare(strict_types=1);

/**
 *
 * Написать регулярное выражение определяющее является ли данная
 * строка шестнадцатиричным идентификатором цвета в HTML
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineHtmlRegex(string $inputString): bool
{
    $guid = '\#[a-f\d]{6}';
    return (preg_match('#' . $guid . '#i', $inputString) === 1);
}



