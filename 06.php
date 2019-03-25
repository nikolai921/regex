<?php

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