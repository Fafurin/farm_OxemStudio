<?php

namespace App\Repositories;

/**
 * Контракт класса репозитория продукции
 */
interface ProductRepositoryInterface
{
    public function saveProduct(string $name, int $product): void;

    public function getProducts(): array;
}