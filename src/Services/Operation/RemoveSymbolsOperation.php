<?php

namespace App\Services\Operation;


class RemoveSymbolsOperation implements IOperation
{
    public function execute(string $text)
    {
        $pattern = '[.,/!@#$%^&*()]';
        return preg_replace($pattern, "", $text);
    }
}