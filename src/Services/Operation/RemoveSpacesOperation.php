<?php

namespace App\Services\Operation;


class RemoveSpacesOperation implements IOperation
{
    public function execute(string $text)
    {
        return str_replace(" ","", $text);
    }
}