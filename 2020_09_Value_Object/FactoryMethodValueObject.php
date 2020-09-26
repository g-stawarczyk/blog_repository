<?php

declare(strict_types=1);

final class ValueObject
{
    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function fromString(string $value): self
    {
        return new self($value);
    }

    public function value(): string
    {
        return $this->value;
    }
}


$value = ValueObject::fromString('foo');
var_dump($value->value());
// foo
$value->__construct('bar');
var_dump($value->value());
// bar
