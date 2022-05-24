<?php

interface Terminal
{
    /**
     * scan
     *
     * @param  mixed $product
     * @return void
     */
    public function scan(Product $product);
}
