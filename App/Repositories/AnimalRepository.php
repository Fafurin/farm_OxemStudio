<?php

namespace App\Repositories;

use App\Models\AnimalInterface;

/**
 * Репозиторий животных
 */
class AnimalRepository implements AnimalRepositoryInterface
{
    /**
     * @var array Защищенный массив, хранящий всех животных
     */
    protected array $animals;

    /**
     * Метод сохраняет переданный объект в массив $animals
     */
    public function saveAnimal(AnimalInterface $animal): void
    {
        $this->animals[$animal->getName()][$animal->getId()] = $animal;
    }

    /**
     * Метод возвращает массив объектов $animals
     */
    public function getAnimals(): array
    {
        return $this->animals;
    }

}