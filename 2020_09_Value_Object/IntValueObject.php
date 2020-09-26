<?php
declare(strict_types=1);

final class ValueObject
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function add(int $value): self
    {
        return new self($this->value + $value);
    }

    public function value(): int
    {
        return $this->value;
    }
}

$value1 = new ValueObject(1);
var_dump($value1);
$value2 = $value1->add(2);
var_dump($value1);
var_dump($value2);
