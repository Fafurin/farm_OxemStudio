<?php

namespace App\Models;

/**
 * Класс куриц
 */

class Chicken extends Animal implements ChickenInterface
{

    /**
     * @var string NAME название класса с маленькой буквы
     */
    public const NAME = 'chicken';

    /**
     * @var integer MIN_EGGS_QUANTITY минимальное количество яиц
     */
    private const MIN_EGGS_QUANTITY = 0;

    /**
     * @var integer MAX_EGGS_QUANTITY максимальное количество яиц
     */
    private const MAX_EGGS_QUANTITY = 1;

    /**
     * Конструктор вызывает конструктор родителя для получения id каждого нового объекта
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Метод возвращает случайное количество яиц
     */
    public function getProducts(): int
    {
        return random_int(self::MIN_EGGS_QUANTITY, self::MAX_EGGS_QUANTITY);
    }

    /**
     * Метод возвращает значение константы NAME
     */
    public function getName(): string
    {
        return self::NAME;
    }

}