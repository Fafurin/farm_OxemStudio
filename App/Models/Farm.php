<?php

namespace App\Models;

use App\Factories\AnimalFactoryInterface;
use App\Repositories\AnimalRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;

/**
 * Класс фермы
 */
class Farm implements FarmInterface
{

    /**
     * В конструктор передаем объекты классов фабрики животных и репозиториев
     */
    public function __construct
    (
        public AnimalFactoryInterface $animalFactory,
        public AnimalRepositoryInterface $animalRepository,
        public ProductRepositoryInterface $productRepository,
    )
    {
    }

    /**
     * Метод передает в репозиторий объекты животных, созданных на фабрике в соответствии с переданным массивом
     */
    public function registerAnimals(array $animals): void
    {
        foreach ($animals as $name => $count) {
            for ($i = 0; $i < $count; $i++) {
                $this->animalRepository->saveAnimal($this->animalFactory->create($name));
            }
        }
    }

    /**
     * Метод берет животных из репозитория, собирает продукцию 7 раз и передает результаты в репозиторий продукции
     */
    public function getProduction(): void
    {
        foreach ($this->animalRepository->getAnimals() as $key => $animals) {
            $products = 0;
            for ($i = 0; $i < 7; $i++) {
                foreach ($animals as $animal) {
                    $products += $animal->getProducts();
                }
                $this->productRepository->saveProduct($key, $products);
            }
        }
    }
}