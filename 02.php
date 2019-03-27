<?php

declare(strict_types=1);

/**
 *
 * Проверка, является ли строка GUID с или без скобок.
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineGuidRegex(string $inputString): bool
{
    $guid = '[a-f\d]{8}\-[a-f\d]{4}\-[a-f\d]{4}\-[a-f\d]{4}\-[a-f\d]{12}';
    return (preg_match('#((?:^' . $guid . '$)|(?:^\{' . $guid . '\}$))#i', $inputString) === 1);
}

/**
 *
 * Не используя регулярные выражения
 *
 * @param string $inputString
 *
 * @return bool
 */

function lineGuidPhp(string $inputString): bool
{
    function checkInside($inputString)
    {
        $elementArray = explode('-', $inputString);

        $countElem = count($elementArray);

        if ($countElem === 5) {
            $countNumber0 = strlen($elementArray[0]);
            $countNumber1 = strlen($elementArray[1]);
            $countNumber2 = strlen($elementArray[2]);
            $countNumber3 = strlen($elementArray[3]);
            $countNumber4 = strlen($elementArray[4]);

            if ($countNumber0 === 8
                && $countNumber1 === 4
                && $countNumber2 === 4
                && $countNumber3 === 4
                && $countNumber4 === 12) {
                $checkNumber = implode('', $elementArray);
                $check = ctype_xdigit($checkNumber);
                if ($check !== false) {
                    $result = true;
                } else {
                    $result = false;
                }
            } else {
                $result = false;
            }
        } else {
            $result = false;
        }
        return $result;
    }

    if ($inputString[0] === '{' && $inputString[-1] === '}') {
        $newInputString = trim($inputString, "\{\}");

        $result = checkInside($newInputString);

    } elseif ($inputString[0] !== '{' && $inputString[-1] !== '}') {
        $result = checkInside($inputString);
    } else {
        $result = false;
    }

    return $result;
}

