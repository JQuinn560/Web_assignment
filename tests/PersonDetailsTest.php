<?php
use PHPUnit\Framework\TestCase;

class PersonDetailsTest extends TestCase
{
    public function testValidationForValidUser()
    {
        // Create a valid user
        $user = new User('Jane', 'Smith', 'jane@example.com', 'password');

        // Create a new PersonDetails object for the user
        $personDetails = new PersonDetails($user);

        // Set valid person details
        $personDetails->setAge(25);
        $personDetails->setAddress('123 Main St');
        // ...

        // Assert that the validation passes for the valid user
        $this->assertTrue($personDetails->validate());
        // ...
    }
}
