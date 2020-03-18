<?php
/**
 * User: TheCodeholic
 * Date: 2/15/2020
 * Time: 5:50 PM
 */

require_once './Person.php';

class Student extends Person
{
    public int $stId;
    public function __construct($name, $age, $stId)
    {
        $this->stId = $stId;
        parent::__construct($name, $age, null);
    }
}
