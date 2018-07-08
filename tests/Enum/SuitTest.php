<?php
namespace BlackJackPhp\Enum;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class SuitTest extends TestCase
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

    public function test_引数を設定しない場合にランダムなスートを生成する()
    {
        $suit = new Suit();

        $expectedArray = [
            'spade',
            'heart',
            'club',
            'diamond',
        ];

        $this->assertTrue(in_array($suit->valueOf(), $expectedArray, true));
    }
}
