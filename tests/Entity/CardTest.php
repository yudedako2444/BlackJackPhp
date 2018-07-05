<?php
namespace BlackJackPhp\Entity;

use BlackJackPhp\Enum\CardNumber;
use BlackJackPhp\Enum\Suit;
use PHPUnit\Framework\TestCase;

class CardTest extends TestCase
{
    public function test_カードのスートと数字を取得することができる()
    {
        $suit = new Suit(Suit::SPADE);
        $cardNumber = new CardNumber(CardNumber::ONE);
        $card = new Card($suit, $cardNumber);

        $this->assertSame('spade', $card->getSuit());
        $this->assertSame(1, $card->getNumber());
    }
}