<?php

namespace App\Models;

/**
 * Контракт родительского класса животных
 */
interface AnimalInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getProducts(): int;
}