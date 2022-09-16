<?php

namespace App\Factories;

use App\Models\AnimalInterface;

/**
 * Фабрика животных
 */
class AnimalFactory implements AnimalFactoryInterface
{

    /**
     * Метод создает объекты AnimalInterface в соответствии с переданным названием класса животных
     */
    public function create(string $animal): AnimalInterface
    {
        $className = 'App\\Models\\' . ucfirst($animal);
        return new $className();
    }

}