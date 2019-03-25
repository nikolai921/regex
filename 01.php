<?php

declare(strict_types=1);

/**
 *
 * Проверка, является ли данная строчка строкой "abcdefdhsf^dsdsbBB0*18340"
 * на базе регулярных выражений.
 *
 * @param $regex
 * @param $inputString
 *
 * @return string
 */

function lineMatchRegex(string $regex, string $inputString)
{
    if(!empty($regex) && !empty($inputString))
    {
        $screening = quotemeta($regex);
        $check = preg_match('#'.$screening.'#', $inputString);
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



/**
 * Не используя регулярные выражения
 */


function lineMatchPHP(string $regex, string $inputString)
{
        if($regex === $inputString)
        {
            $result = 'Yes';
        } else
        {
            $result = 'No';
        }
        return $result;
}

