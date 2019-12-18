<?php

namespace App\Services\Operation;

interface IOperation
{
    /**
     * Выполнить операцию
     *
     * @param string $text
     * @return mixed
     */
    public function execute(string $text);
}