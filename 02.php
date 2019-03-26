<?php

declare(strict_types=1);

/**
 *
 * Проверка, является ли строка GUID с или без скобок.
 *
 * @param string $inputString
 *
 * @return string
 */

function lineGUIDregex(string $inputString)
{
    if (!empty($inputString)) {
        $guid = '[a-f\d]{8}\-[a-f\d]{4}\-[a-f\d]{4}\-[a-f\d]{4}\-[a-f\d]{12}';
        $check = preg_match('#((?:^' . $guid . '$)|(?:^\{' . $guid . '\}$))#i', $inputString);
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

function lineGUIDphp(string $inputString)
{
    if (!empty($inputString)) {
        if ($inputString[0] === '{' && $inputString[-1] === '}') {
            $newInputString = trim($inputString, "\{\}");

            $elementArray = explode('-', $newInputString);

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
                        $result = 'Yes';
                    } else {
                        $result = 'No';
                    }
                } else {
                    $result = 'No';
                }
            } else {
                $result = 'No';
            }

        } elseif ($inputString[0] !== '{' && $inputString[-1] !== '}') {
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
                        $result = 'Yes';
                    } else {
                        $result = 'No';
                    }
                } else {
                    $result = 'No';
                }
            } else {
                $result = 'No';
            }
        } else {
            $result = 'No';
        }
    }
    return $result;
}

