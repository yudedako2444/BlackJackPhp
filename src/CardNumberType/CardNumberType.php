<?php
namespace BlackJackPhp\CardNumberType;

abstract class CardNumberType
{
    protected $weight;
    protected $name;

    public function getWeight()
    {
        return $this->weight;
    }

    public function getName()
    {
        return $this->name;
    }
}