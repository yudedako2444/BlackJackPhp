<?php
namespace BlackJackPhp\Entity;

use BlackJackPhp\Enum\CardNumber;
use BlackJackPhp\Enum\Suit;

class Card {
    /**
     * @var Suit
     */
    private $suit;

    /**
     * @var CardNumber
     */
    private $number;

    public function __construct(Suit $suit, CardNumber $number)
    {
        $this->suit = $suit;
        $this->number = $number;
    }

    public function getSuit()
    {
        return $this->suit->valueOf();
    }

    public function getNumber()
    {
        return $this->number->valueOf();
    }
}