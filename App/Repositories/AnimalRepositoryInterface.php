<?php

namespace App\Repositories;

/**
 * Контракт класса репозитория животных
 */
use App\Models\AnimalInterface;

interface AnimalRepositoryInterface
{
    public function saveAnimal(AnimalInterface $animal): void;

    public function getAnimals(): array;
}