<?php

namespace App\Models;

/**
 * Класс коров
 */

class Cow extends Animal implements CowInterface
{
    /**
     * @var string NAME название класса с маленькой буквы
     */
    public const NAME = 'cow';

    /**
     * @var integer MIN_MILK_QUANTITY минимальное количество молока, производимое коровой
     */
    private const MIN_MILK_QUANTITY = 8;

    /**
     * @var integer MAX_MILK_QUANTITY максимальное количество молока, производимое коровой
     */
    private const MAX_MILK_QUANTITY = 12;

    /**
     * Конструктор вызывает конструктор родителя для получения id каждого нового объекта
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Метод возвращает случайное количество литров молока
     */
    public function getProducts(): int
    {
        return random_int(self::MIN_MILK_QUANTITY, self::MAX_MILK_QUANTITY);
    }

    /**
     * Метод возвращает значение константы NAME
     */
    public function getName(): string
    {
        return self::NAME;
    }

}