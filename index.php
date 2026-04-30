<?php

abstract class Figure
{
    protected float $area;
    protected string $color;
    protected int $sidesCount;

    abstract public function infoAbout(): string;

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

interface AreaInterface
{
    public function getArea(): float;
}

class Rectangle extends Figure implements AreaInterface
{
    private float $a;
    private float $b;

    protected int $sidesCount = 4;

    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
        $this->color = "transparent";
    }

    public function getArea(): float
    {
        return $this->a * $this->b;
    }

    public function infoAbout(): string
    {
        return "Это класс прямоугольника. У него " . $this->sidesCount . " стороны";
    }
}

class Square extends Figure implements AreaInterface
{
    private float $a;

    protected int $sidesCount = 4;

    public function __construct(float $a)
    {
        $this->a = $a;
        $this->color = "transparent";
    }

    public function getArea(): float
    {
        return $this->a * $this->a;
    }

    public function infoAbout(): string
    {
        return "Это класс квадрата. У него " . $this->sidesCount . " стороны";
    }
}

class Triangle extends Figure implements AreaInterface
{
    private float $a;
    private float $b;
    private float $c;

    protected int $sidesCount = 3;

    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->color = "transparent";
    }

    public function getArea(): float
    {
        $p = ($this->a + $this->b + $this->c) / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }

    public function infoAbout(): string
    {
        return "Это класс треугольника. У него " . $this->sidesCount . " стороны";
    }
}

$rectangle1 = new Rectangle(5, 10);
$rectangle2 = new Rectangle(7, 3);

$square1 = new Square(4);
$square2 = new Square(6);

$triangle1 = new Triangle(3, 4, 5);
$triangle2 = new Triangle(5, 6, 7);

echo "<h3>Прямоугольники:</h3>";
echo $rectangle1->infoAbout() . "<br>";
echo "Площадь прямоугольника 1 (5x10): " . $rectangle1->getArea() . "<br>";
echo $rectangle2->infoAbout() . "<br>";
echo "Площадь прямоугольника 2 (7x3): " . $rectangle2->getArea() . "<br>";

echo "<h3>Квадраты:</h3>";
echo $square1->infoAbout() . "<br>";
echo "Площадь квадрата 1 (4x4): " . $square1->getArea() . "<br>";
echo $square2->infoAbout() . "<br>";
echo "Площадь квадрата 2 (6x6): " . $square2->getArea() . "<br>";

echo "<h3>Треугольники:</h3>";
echo $triangle1->infoAbout() . "<br>";
echo "Площадь треугольника 1 (3,4,5): " . round($triangle1->getArea(), 2) . "<br>";
echo $triangle2->infoAbout() . "<br>";
echo "Площадь треугольника 2 (5,6,7): " . round($triangle2->getArea(), 2) . "<br>";
