<?php

use App\Factories\AnimalFactory;
use App\Models\Farm;
use App\Repositories\AnimalRepository;
use App\Repositories\ProductRepository;
use App\Reports\Report;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Созаем объект фабрики животных, который будет создавать объекты классов животных
 */
$animalFactory = new AnimalFactory();

/**
 * Созаем репозитории животных и продуктов. Здесь будем хранить животных и готовую продукцию
 */
$animalRepository = new AnimalRepository();
$productRepository = new ProductRepository();

/**
 * Созаем объект фермы - основного класса нашего приложения, который ведет учёт номеров животных, сбор и подсчет продукции.
 */
$farm = new Farm($animalFactory, $animalRepository, $productRepository);

/**
 * Создаем объект класса отчет, который будет выводить информацию на экран
 */
$report = new Report($animalRepository, $productRepository);

/**
 * Добавляем животных (10 коров и 20 кур).
 */
$animals = [
    'cow' => 10,
    'chicken' => 20,
];

/**
 * Регистрируем животных
 */
$farm->registerAnimals($animals);

/**
 * Выводим информацию о всех животных на ферме
 */
$report->showAllAnimals();

/**
 * 7 раз (неделю) производим сбор продукции
 */
$farm->getProduction();

/**
 * Выводим на экран общее кол-во собранных за неделю шт. яиц и литров молока.
 */
$report->showAllProducts();

/**
 * Добавляем на ферму ещё 5 кур и 1 корову (съездили на рынок, купили животных).
 */

$additionalAnimals = [
    'cow' => 1,
    'chicken' => 5,
];

$farm->registerAnimals($additionalAnimals);

/**
 * Снова выводим информацию о количестве каждого типа животных на ферме
 */
$report->showAllAnimals();

/**
 * Снова 7 раз (неделю) производим сбор продукции
 */
$farm->getProduction();

/**
 * и выводим результат на экран.
 */
$report->showAllProducts();


