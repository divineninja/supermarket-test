<?php

/**
 * PointOfSaleTerminal
 */
class PointOfSaleTerminal
{
    /**
     * id
     *
     * @var mixed
     */
    private $id;
    
    /**
     * __construct
     *
     * @param  mixed $sale_id
     * @return void
     */
    public function __construct(string $sale_id)
    {
        $this->id = $sale_id;
    }
      
    /**
     * getId
     *
     * @return integer
     */
    public function getId(): integer
    {
        return $this->id;
    }

    /**
     * setId
     *
     * @param  mixed $id
     * @return self
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
}
