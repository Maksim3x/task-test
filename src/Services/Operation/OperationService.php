<?php

namespace App\Services\Operation;

/**
 * Сервис по работе с операциями
 *
 * Class OperationService
 * @package App\Services\Operation
 */
class OperationService
{
    /**
     * Получить результат операций
     *
     * @param string $text
     * @param array $operations
     * @return string
     */
    static function getResult(string $text, array $operations)
    {
        $result = $text;
        foreach ($operations as $item)
        {
            $classOperation = 'App\\Services\\Operation\\' . $item . 'Operation';
            $operation = new $classOperation();
            $result = $operation->execute($result);
        }
        return $result;
    }
}