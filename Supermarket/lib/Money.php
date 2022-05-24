<?php

/**
 * Money
 */
class Money
{
    /**
     * currency
     *
     * @var string
     */
    private $currency = '$';
    
    /**
     * format
     *
     * @param  mixed $amount
     * @return string
     */
    public function format(float $amount): string
    {
        return $this->currency . number_format($amount, 2, '.', ',');
    }
}
