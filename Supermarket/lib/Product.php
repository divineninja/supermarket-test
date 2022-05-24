<?php

/**
 * Product
 */
class Product implements Terminal
{
    /**
     * id
     *
     * @var mixed
     */
    private $id;

    /**
     * name
     *
     * @var mixed
     */
    private $name;

    /**
     * amount
     *
     * @var mixed
     */
    private $amount;

    
    /**
     * __construct
     *
     * @param  mixed $id
     * @param  mixed $name
     * @param  mixed $amount
     * @return void
     */
    public function __construct(Int $id, String $name, float $amount)
    {
        $this->id = $id;
        $this->name = $name;
        $this->amount = $amount;
    }
    
    /**
     * getName
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * setName
     *
     * @param  mixed $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    
    /**
     * getAmount
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

      
    /**
     * setAmount
     *
     * @param  mixed $amount
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * scan
     *
     * @param  mixed $products
     * @return array
     */
    public function scan($products): array
    {
        return $products[] = [
            'id' => $this->id,
            'name' => $this->name,
            'amount' => $this->amount,
        ];
    }
}
