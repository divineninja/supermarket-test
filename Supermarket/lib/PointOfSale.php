<?php

/**
 * PointOfSale
 */
class PointOfSale extends Money
{
    use ArrayProcessing;
    
    /**
     * products
     *
     * @var array
     */
    private $products = [];

    /**
     * ProductCollections
     *
     * @var ProductCollections
     */
    private ProductCollections $collection;

    
    /**
     * PoinsOfSale constructor.
     *
     * @param \ProductCollections $collection
     */
    public function __construct(ProductCollections $collection)
    {
        $this->collection = $collection;
    }
    
    /**
     * scanProduct
     *
     * @param  mixed $code
     * @return self
     */
    public function scanProduct(string $code): self
    {
        $prod = $this->collection->getItem($code);

        if ($prod) {
            $this->products[] = $prod;
     
            // if item has code ID - perform condition and
            // check if the count of the code ID is equal
            // to the count value in the array
            if ($prod['code_id']) {
                if (count($this->get_products_by_value($code)) ==  $prod['count']) {
                    // assign the Item bulk item to the product collection
                    $this->products[] = $this->collection->getItem($prod['code_id']);
                    // remove the non-bulk product value
                    $this->remove_products_by_value($code);
                }
            }
        }

        return $this;
    }

    /**
     * Get the value of products
     *
     * @return PointOfSale Product
     */
    public function getProducts()
    {
        return $this->products;
    }

       
    /**
     * setProducts
     *
     * @param  mixed $products
     * @return self
     */
    public function setProducts($products): self
    {
        $this->products = $products;

        return $this;
    }

    /**
    * Calculate total amount of all added product
    *
    * @return string
    */
    public function getTotal(): string
    {
        // calculate sum of amount of product array
        $total = array_sum(array_column($this->products, 'amount'));
        // return formatted amount in $ currency
        return $this->format($total);
    }
}
