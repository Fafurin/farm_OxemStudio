<?php

namespace App\Reports;

use App\Repositories\AnimalRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;

/**
 * Класса отчета
 */
class Report implements ReportInterface
{

    /**
     * В конструктор передаем репозитории животных и продукции
     */
    public function __construct
    (
        public AnimalRepositoryInterface $animalRepository,
        public ProductRepositoryInterface $productRepository
    )
    {
    }

    /**
     * Метод получает животных из репозитория и выводит информацию о них на экран
     */
    public function showAllAnimals(): void
    {
        $animals = $this->animalRepository->getAnimals();
        echo 'На ферме ' . count($animals['cow']) . ' коров и ' . count($animals['chicken']) . ' кур.' . PHP_EOL;
    }

    /**
     * Метод получает продукцию из репозитория и выводит информацию о ней на экран
     */
    public function showAllProducts(): void
    {
        $products = $this->productRepository->getProducts();
        echo 'За неделю собрано ' . $products['cow'] . ' литров молока и ' . $products['chicken'] . ' яиц.' . PHP_EOL;
    }
}