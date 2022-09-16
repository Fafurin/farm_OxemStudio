<?php

namespace App\Factories;

use App\Models\AnimalInterface;

/**
 * Контракт фабрики животных
 */
interface AnimalFactoryInterface
{

    public function create(string $animal): AnimalInterface;

}