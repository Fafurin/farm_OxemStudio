<?php

namespace App\Models;

/**
 * Родительский абстрактный класс животных
 */
abstract class Animal implements AnimalInterface
{
    /**
     * @var integer Id животного
     */
    public int $id;

    /**
     * Конструктор присваивает уникальный id животному
     */
    public function __construct()
    {
        $this->id = random_int(1000,999999999);
    }

    /**
     * Метод возвращает id животного
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Метод возвращает название класса с маленькой буквы
     */
    abstract public function getName(): string;

    /**
     * Метод возвращает случайное число продуктов
     */
    abstract public function getProducts(): int;

}