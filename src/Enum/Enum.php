<?php
namespace BlackJackPhp\Enum;

use ReflectionObject;
use InvalidArgumentException;

abstract class Enum
{
    private $scalar;

    public function __construct($value)
    {
        $ref = new ReflectionObject($this);
        $consts = $ref->getConstants();
        if (! in_array($value, $consts, true)) {
            throw new InvalidArgumentException('定義されいない値です。: '.$value);
        }

        $this->scalar = $value;
    }

    final public static function __callStatic($label, $args)
    {
        $class = get_called_class();
        $const = constant("$class::$label");
        return new $class($const);
    }

    //元の値を取り出すメソッド。
    //メソッド名は好みのものに変更どうぞ
    final public function valueOf()
    {
        return $this->scalar;
    }

    final public function __toString()
    {
        return (string)$this->scalar;
    }
}