<?php

declare(strict_types=1);

/**
 *
 * Написать регулярное выражение определяющее
 * является ли данная строчка валидным URL адресом.
 *
 * @param string $inputString
 *
 * @return string
 */

function lineURLregex(string $inputString)
{
    if (!empty($inputString)) {

        $check = preg_match('#^(?:http(?:s)?\:\/\/)?(www\.)?[^\-][a-zA-Z0-9\.\-]{2,}[^\-]\.[a-z]{2,3}(?:.*)?$#',
            $inputString);
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

function lineURLphp(string $inputString)
{
    if (!empty($inputString)) {

        $check = filter_var($inputString, FILTER_VALIDATE_URL);
        if ($check !== false) {
            $hostName = parse_url($check, PHP_URL_HOST);
            $checkHost = preg_replace('#^(?:www\.)?(.*)\.[a-z]{2,3}$#', '$1', $hostName);
            $lengthHost = strlen($checkHost);
            if ($lengthHost > 1) {
                $result = 'Yes';
            } else {
                $result = 'No';
            }

        } else {
            $scheme = parse_url($inputString, PHP_URL_SCHEME);
            if (empty($scheme)) {
                $testUrl = 'http://' . $inputString;
                $newCheck = filter_var($testUrl, FILTER_VALIDATE_URL);
                if ($newCheck !== false) {
                    $result = 'Yes';
                } else {
                    $result = 'No';
                }
            } else {
                $result = 'No';
            }

        }
        return $result;
    }

}


