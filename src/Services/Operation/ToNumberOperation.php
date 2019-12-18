<?php

namespace App\Services\Operation;


use PHPUnit\Exception;

class ToNumberOperation implements IOperation
{
    public function execute(string $text)
    {
        $number = NULL;
        $pattern = '/[^0-9]/';
        try {
            $number = intval(preg_replace($pattern, "", $text));
        }
        catch (Exception $ex){
            print_r('error to number');
        }

        return $number;
    }
}