<?php

declare(strict_types=1);

/**
 *
 * Написать регулярное выражение определяющее является ли данная строка
 * валидным E-mail адресом согласно RFC под номером 2822
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineEmailRegex(string $inputString): bool
{
    return (preg_match('/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,})$/i',
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

function lineEmailPhp(string $inputString)
{
    return (filter_var($inputString, FILTER_VALIDATE_EMAIL) !== false);
}
