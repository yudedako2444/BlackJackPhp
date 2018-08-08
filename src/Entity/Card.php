<?php
namespace BlackJackPhp\Entity;

use BlackJackPhp\CardNumberType\CardNumberType;
use BlackJackPhp\Enum\Suit;

class Card
{
    /**
     * @var Suit
     */
    private $suit;

    /**
     * @var CardNumberType
     */
    private $number;

    public function __construct(Suit $suit, CardNumberType $number)
    {
        $this->suit = $suit;
        $this->number = $number;
    }

    public function getSuit(): string
    {
        return $this->suit->valueOf();
    }

    public function getNumber(): array
    {
        return $this->number->getWeight();
    }
}
