<?php

declare(strict_types=1);

/**
 *
 * Проверка, является ли данная строчка строкой "abcdefdhsf^dsdsbBB0*18340"
 * на базе регулярных выражений.
 *
 *
 * @param $regex       - основная строка
 * @param $inputString - сравниваемая строка на соответствие основной
 *
 * @return bool
 */

function lineMatchRegex(string $regex, string $inputString): bool
{
    $screening = quotemeta($regex);
    return (preg_match('#' . $screening . '#', $inputString) === 1);
}

/**
 * Не используя регулярные выражения
 *
 * @param string $regex
 * @param string $inputString
 *
 * @return bool
 */

function lineMatchPHP(string $regex, string $inputString): bool
{
    return ($regex === $inputString);
}

