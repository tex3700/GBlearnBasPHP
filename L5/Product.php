<?php

class Product
{
    private string $title = 'Product';
    private ?float $price = 0.0;
    private ?array $components;

    public function __construct(string $title, ?float $price, ?array $components = [])
    {
        $this->title = $title;
        $this->price = $price;
        $this->components = $components;

        if (empty($components)){
            $this->price = $price;
        } else {
            $this->updatePrice();
        }
    }

    public function updatePrice(): float
    {
        $price = 0;

        foreach ($this->components as $component){
            $price += $component->getPrice();
        }

        return $this->price = $price;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setName(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * @param array $components
     */
    public function setComponents(array $components): void
    {
        $this->components = $components;
    }


}