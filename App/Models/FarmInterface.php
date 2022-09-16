<?php

namespace App\Models;

/**
 * Контракт класса фермы
 */
interface FarmInterface
{
    public function registerAnimals(array $animals): void;

    public function getProduction(): void;
}