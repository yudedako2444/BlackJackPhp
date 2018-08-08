<?php
namespace BlackJackPhp\CardNumberType;

/**
 * エース
 */
class Ace extends CardNumberType
{
    protected $weight = [1, 11];
    protected $name = 'ace';
}
