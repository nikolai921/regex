<?php

declare(strict_types=1);

/**
 *
 * Написать регулярное выражение определяющее является ли данная строка
 * валидным E-mail адресом согласно RFC под номером 2822
 *
 */

function lineEmailRegex(string $inputString)
{
    if(!empty($inputString))
    {
        $check = preg_match('/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,})$/i', $inputString);
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

function lineEmailPhp($inputString)
{
    if(!empty($inputString))
    {
        $check = filter_var($inputString, FILTER_VALIDATE_EMAIL);

        if($check !== false)
        {
            $result = 'Yes';
        } else
        {
            $result = 'No';
        }
        return $result;
    }
}

