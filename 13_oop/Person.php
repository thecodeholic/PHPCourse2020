<?php
/**
 * User: TheCodeholic
 * Date: 2/15/2020
 * Time: 9:00 AM
 */

class Person {
    // 3. Create properties
    public $name;
    protected $age;
    private $salary;

    // 7. Create constructor
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    // 5. Create setter and getter for age
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }
}
