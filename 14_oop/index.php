<?php

// What is class and instance
class Person {
    public string $name;
    public int $age;
    public ?int $salary; //null can be assigned

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$p = new Person();
$p->name = 'Doe';
$p->age = 14;
$p->salary = 10000;

echo '<pre>';
var_dump($p);
echo '</pre>';
// Create Person class in Person.php

// Create instance of Person

// Using setter and getter
