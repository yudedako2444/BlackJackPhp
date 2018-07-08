<?php
namespace BlackJackPhp\Enum;

/**
 * トランプの数字
 */
final class CardNumber extends Enum
{
    const ONE	   = 1;
    const TWO	   = 2;
    const THREE	   = 3;
    const FOUR	   = 4;
    const FIVE	   = 5;
    const SIX	   = 6;
    const SEVEN	   = 7;
    const EIGHT	   = 8;
    const NINE	   = 9;
    const TEN	   = 10;
    const ELEVEN   = 11;
    const TWELVE   = 12;
    const THIRTEEN = 13;

    public function __construct($value = null)
    {
        if ($value === null) {
            $value = mt_rand(1, 15);
        }

        parent::__construct($value);
    }
}
