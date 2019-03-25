<?php

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
    if(!empty($inputString))
    {
        $guid = '\#[a-f\d]{6}';
        $check = preg_match('#'.$guid.'#i', $inputString);
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

//print_r(lineHTMLregex('#fd2'));

function lineHTMLphp(string $inputString)
{
    if(!empty($inputString))
    {
        $check = mb_substr($inputString, 1);
        if(ctype_xdigit($check) === true && strlen($check) === 6)
        {
            $result = 'Yes';
        } else
        {
            $result = 'No';
        }
        return $result;
    }
}

//print_r(lineHTMLphp('#fd2'));
