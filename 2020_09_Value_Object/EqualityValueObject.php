<?php

declare(strict_types=1);

final class ValueObject
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function equals(ValueObject $value): bool
    {
        return $this->value === $value->value();
    }

    public function value(): int
    {
        return $this->value;
    }
}

$value1 = new ValueObject(1);
$value2 = new ValueObject(1);
var_dump($value1 == $value2);
// true

$value1 = new ValueObject(10);
$value2 = new ValueObject(9);
var_dump($value1 === $value2);
// false

$value1 = new ValueObject(1);
$value2 = new ValueObject(1);
var_dump($value1 === $value2);
// false

$value1 = new ValueObject(10);
$value2 = $value1;
var_dump($value1 === $value2);
// true

$value1 = new ValueObject(1);
$value2 = new ValueObject(1);
var_dump($value1->equals($value2));
// true

$value1 = new ValueObject(10);
$value2 = new ValueObject(9);
var_dump($value1->equals($value2));
// false

$value1 = new ValueObject(10);
$value2 = $value1;
var_dump($value1->equals($value2));
// true
