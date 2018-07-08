<?php
namespace BlackJackPhp\Enum;

use ReflectionObject;

/**
 * トランプのスート
 */
final class Suit extends Enum
{
    const SPADE   = 'spade';
    const HEART   = 'heart';
    const CLUB    = 'club';
    const DIAMOND = 'diamond';

    public function __construct($value = null)
    {
        if ($value === null) {
            $ref = new ReflectionObject($this);
            $consts = $ref->getConstants();
            $value = $consts[array_rand($consts)];
        }

        parent::__construct($value);
    }
}
