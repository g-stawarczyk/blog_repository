<?php

declare(strict_types=1);

final class ValueObject
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}


$value = new ValueObject('foo');
var_dump($value->value());
// foo
$value->__construct('bar');
var_dump($value->value());
// bar
