<?php

trait ArrayProcessing
{
        
    /**
     * get_products_by_value
     *
     * @param  mixed $name
     * @return void
     */
    public function get_products_by_value($name)
    {
        $new = array_filter($this->products, function ($var) use ($name) {
            return ($var['code'] == $name);
        });
        return $new;
    }
    
    /**
     * remove_products_by_value
     *
     * @param  mixed $name
     * @return self
     */
    public function remove_products_by_value($name): self
    {
        $new = array_filter($this->products, function ($var) use ($name) {
            return ($var['code'] != $name);
        });

        $this->products = $new;

        return $this;
    }
}
