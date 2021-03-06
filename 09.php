<?php
/**
 *
 * Проверить, надежно ли составлен пароль. Пароль считается надежным, если он состоит из 8 или более символов.
 * Где символом может быть английская буква, цифра и знак подчеркивания.
 * Пароль должен содержать хотя бы одну заглавную букву, одну маленькую букву и одну цифру.
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineIpRegex(string $inputString)
{
    return (preg_match('#^\S*(?=\S{8})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$#', $inputString) === 1);
}

