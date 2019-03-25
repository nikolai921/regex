<?php

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
    if(!empty($inputString))
    {
        $guid = '[a-f\d]{8}\-[a-f\d]{4}\-[a-f\d]{4}\-[a-f\d]{4}\-[a-f\d]{12}';
        $check = preg_match('#((?:^'.$guid.'$)|(?:^\{'.$guid.'\}$))#i', $inputString);
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

print(lineGUIDregex('{e02fa0e4-01ad-090A-c130-0d05a0008ba0}'));

function lineGUIDphp(string $inputString)
{
    function xdigit($inputString){
        $elementArray = explode('-', $inputString);

        $flag = false;
        foreach($elementArray as $elem)
        {
            if(ctype_xdigit($elem)){}
        }

    }

    if(!empty($inputString))
    {

        if($inputString[0] === '{' && $inputString[-1] === '}')
        {
            $stringBody = substr($inputString, 1, 36);

        } elseif($inputString[0] !== '{' && $inputString[-1] !== '}')
        {
            $stringBody = substr($inputString, 0, 36);
        }
    }
    return $stringBody;
}

//print_r(lineGUIDphp('{e02fa0e4-01ad-090A-c130-0d05a0008ba0}'));