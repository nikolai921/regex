<?php

declare(strict_types=1);

/**
 *
 * Написать регулярное выражение определяющее является ли данная строчка датой в формате dd/mm/yyyy.
 * Начиная с 1600 года до 9999 года
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineDateRegex(string $inputString): bool
{
    $regular = '#^(((0[1-9]|[12][0-9]|30)/?(0[13-9]|1[012])|31/?(0[13578]|1[02])|(0[1-9]|1[0-9]|2[0-8])/?02)/?[0-9]'
        . '{4}|29/?02/?([0-9]{2}(([2468][048]|[02468][48])|[13579][26])|([13579][26]|[02468][048]|0[0-9]|1[0-6])00))$#';
    return (preg_match($regular, $inputString) === 1);
}

/**
 * Не используя регулярные выражения
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineDatePhp(string $inputString): bool
{
    $arrayDate = explode('/', $inputString);

    if (count($arrayDate) === 3) {

        list($day, $month, $year) = $arrayDate;

        if ($year >= 1600
            && $year <= 9999
            && mb_strlen($day) === 2
            && mb_strlen($month) === 2
            && mb_strlen($year) === 4) {
            $result = checkdate((int)$month, (int)$day, (int)$year);
        } else {
            $result = false;
        }
    } else {
        $result = false;
    }

    return $result;
}
