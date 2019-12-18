<?php

namespace App\Services\Operation;


class StripTagOperation implements IOperation
{
    public function execute(string $text)
    {
        return strip_tags($text);
    }
}