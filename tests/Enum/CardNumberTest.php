<?php
namespace BlackJackPhp\Enum;

use PHPUnit\Framework\TestCase;

class CardNumberTest extends TestCase
{
    public function test_引数を設定しない場合に1から13のランダムな値を生成する()
    {
        $cardNumber = new CardNumber();

        $expectedArray = [];
        for ($i = 1; $i <= 13; $i++) {
            $expectedArray[] = $i;
        }

        $this->assertTrue(in_array($cardNumber->valueOf(), $expectedArray, true));
    }
}