<?php
namespace BlackJackPhp\Enum;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class EnumTest extends TestCase
{
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage 定義されいない値です。: no_definition
     */
    public function test_定義されていない値でインスタンス化しようとすると例外を発生させるか()
    {
        new Suit('no_definition');
    }

    public function test_設定した値が取得できるか()
    {
        $suit = new Suit('spade');

        $this->assertSame('spade', $suit->valueOf());
    }
}