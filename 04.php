<?php

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
    if(!empty($inputString))
    {

        $check = preg_match('#^(?:http(?:s)?\:\/\/)?(www\.)?[^\-][a-zA-Z0-9\.\-]{2,}[^\-]\.[a-z]{2,3}(?:.*)?$#', $inputString);
        if($check === 1)
        {
            $result = 'Yes';
        } else
        {
            $result = 'No';
        }
        return $result;
    }

}

//print(lineURLregex('http://www.zcontest.ru'));

function lineURLphp(string $inputString)
{
    if(!empty($inputString))
    {

        $check = filter_var($inputString, FILTER_VALIDATE_URL);
        if($check !== false)
        {
            $userName = parse_url($check, PHP_URL_USER);
//            if($userName)

            $result = 'Yes';
        } else
        {
            $testUrl = 'http://' . $inputString;
            $newCheck = filter_var($testUrl, FILTER_VALIDATE_URL);
            if($newCheck !== false)
            {
                $result = 'Yes';
            } else
            {
                $result = 'No';
            }


        }
        return $result;
    }

}

//print(lineURLphp('http://zcon.com/index.html#bookmark'));

//print_r(filter_var('http://www.zcontest.ru', FILTER_VALIDATE_URL));

$array = parse_url('http://www.domain-.com ');
var_dump($array);