<?php

class Employee
{
    private $name;
    private $age;    
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    private function checkAge($newAge)
    {
        return $newAge >= 18;
    }

    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
            echo "Возраст успешно изменен на {$newAge}.<br>";
        } else {
            echo "Вам работать в нашей компании еще рано.<br>";
        }
    }

    public function getAge()
    {
        return $this->age;
    }
}

$employee1 = new Employee("Маша", 25, 58000);
$employee2 = new Employee("Даша", 35, 78000);

$sumSalary = $employee1->getSalary() + $employee2->getSalary();
echo "Сумма зарплат: {$sumSalary}<br>";

$sumAge = $employee1->getAge() + $employee2->getAge();
echo "Сумма возрастов: {$sumAge}<br>";

echo "Имя первого работника: " . $employee1->getName() . "<br>";
echo "Возраст первого работника: " . $employee1->getAge() . "<br>";
echo "Зарплата первого работника: " . $employee1->getSalary() . "<br>";

echo "Сумма зарплат через getSalary(): " . 
     ($employee1->getSalary() + $employee2->getSalary()) . "<br>";

$employee1->setAge(21);  
$employee1->setAge(17); 

echo "Текущий возраст работника 1: " . $employee1->getAge() . "<br>";
echo "Текущий возраст работника 2: " . $employee2->getAge() . "<br>";