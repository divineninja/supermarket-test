<?php

/**
 * ProductCollections
 */
class ProductCollections
{
    /**
     * items
     *
     * @var array
     */
    private $items = [];

    /**
     * addItem
     *
     * @param  mixed $product
     * @return self
     */
    public function addItem(array $product): self
    {
        $this->items[$product['code']] = $product;

        return $this;
    }

    /**
     * getItem
     *
     * @param  mixed $key
     */
    public function getItem($key)
    {
        if (!isset($this->items[$key])) {
            return false;
        }
        
        return $this->items[$key];
    }


    /**
     * getItems
     *
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
