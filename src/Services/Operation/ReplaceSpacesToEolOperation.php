<?php

namespace App\Services\Operation;


class ReplaceSpacesToEolOperation implements IOperation
{
    public function execute(string $text)
    {
        return str_replace(" ","\n", $text);
    }
}