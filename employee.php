<?php

class Employee {
    private $employeeId;
    private $firstName;
    private $lastName;
    private $fullName;
    private $email;


    function __construct($employeeId, $email, $firstName, $lastName) {
        $this->employeeId = $employeeId;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getFullName() {
        return $this->fullName;
    }

    function getEmail() {
        return $this->email;
    }

}

?>