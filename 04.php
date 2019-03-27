<?php

declare(strict_types=1);

/**
 *
 * Написать регулярное выражение определяющее
 * является ли данная строчка валидным URL адресом.
 *
 * В данной задачи, в варианте решение без использования регулярных выражений. При использование функции filter_var,
 * некоторые тесты на неверное решение, реализовывались неправильно. В результате чего были сделаны отдельные правки
 * чтобы четко соответствовать условиям задачи.
 * При этом найти качественного решения через встроенные функции  PHP не получилось (слишком сложное решение
 * по разбору строки), были использованы короткие регулярные выражения на соответствие строки,
 * в основном это применялось для отбрасывания Url типа http://a.com.
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineUrlRegex(string $inputString): bool
{
    return (preg_match('#^(?:http(?:s)?\:\/\/)?(www\.)?[^\-][a-zA-Z0-9\.\-]{2,}[^\-]\.[a-z]{2,}(?:.*)?$#',
            $inputString) === 1);
}

/**
 *
 * Не используя регулярные выражения
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineUrlPhp(string $inputString): bool
{
    $check = filter_var($inputString, FILTER_VALIDATE_URL);
    if ($check !== false) {
        $result = true;
    } else {
        $testUrl = 'http://' . $inputString;
        $newCheck = filter_var($testUrl, FILTER_VALIDATE_URL);
        if ($newCheck !== false) {
            $result = true;
        } else {
            $result = false;
        }
    }

    return $result;
}
