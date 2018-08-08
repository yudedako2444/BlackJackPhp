<?php
namespace BlackJackPhp\Entity;

use BlackJackPhp\CardNumberType\Ace;
use BlackJackPhp\Enum\CardNumber;
use BlackJackPhp\Enum\Suit;
use PHPUnit\Framework\TestCase;

class CardTest extends TestCase
{
    public function test_カードのスートと数字を取得することができる()
    {
        $suit = new Suit(Suit::SPADE);
        $cardNumber = new Ace();
        $card = new Card($suit, $cardNumber);

        $this->assertSame('spade', $card->getSuit());
        $this->assertSame([1, 11], $card->getNumber());
    }
}
