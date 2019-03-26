<?php

declare(strict_types=1);

/**
 *
 * Написать регулярное выражение определяющее является ли данная строчка датой в формате dd/mm/yyyy.
 * Начиная с 1600 года до 9999 года
 *
 * @param string $inputString
 *
 * @return string
 */

function lineDATEregex(string $inputString)
{
    if (!empty($inputString)) {
        $regular = '#^(((0[1-9]|[12][0-9]|30)/?(0[13-9]|1[012])|31/?(0[13578]|1[02])|(0[1-9]|1[0-9]|2[0-8])/?02)/?[0-9]'
        . '{4}|29/?02/?([0-9]{2}(([2468][048]|[02468][48])|[13579][26])|([13579][26]|[02468][048]|0[0-9]|1[0-6])00))$#';
        $check = preg_match($regular, $inputString);
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

function lineDATEphp($inputString)
{
    if (!empty($inputString)) {
        $arrayDate = explode('/', $inputString);
        if (!empty($arrayDate[1])) {
            $day = (int)$arrayDate[0];
            $month = (int)$arrayDate[1];
            $year = (int)$arrayDate[2];


            $checkDate = checkdate($month, $day, $year);

            if ($checkDate === true) {
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

