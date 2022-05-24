<?php

class Cart
{
    private array $products = [];

    public function getPrice(): float
    {
        $price = 0;

        foreach ($this->products as $product){
            $price += $product->getPrice();
        }
        return $price;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function removeProduct(): void
    {
        unset($this->products);
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

}