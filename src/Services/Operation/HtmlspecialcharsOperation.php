<?php

namespace App\Services\Operation;


class HtmlspecialcharsOperation implements IOperation
{
    public function execute(string $text)
    {
        return htmlspecialchars($text);
    }
}