<?php
/**
 * User: TheCodeholic
 * Date: 2/15/2020
 * Time: 5:49 PM
 */

class Person {
    public string $name;
    public int $age;
    private ?float $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}
