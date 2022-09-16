<?php

namespace App\Repositories;

/**
 * Репозиторий продукции
 */
class ProductRepository implements ProductRepositoryInterface
{

    /**
     * @var array Защищенный массив, хранящий всю продукцию
     */
    protected array $products;

    /**
     * Метод сохраняет продукцию в массив $products
     */
    public function saveProduct(string $name, int $product): void
    {
        $this->products[$name] = $product;
    }

    /**
     * Метод возвращает массив продуктции $products
     */
    public function getProducts(): array
    {
        return $this->products;
    }

}