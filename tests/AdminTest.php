<?php
use PHPUnit\Framework\TestCase;

class AdminTest extends TestCase
{
    public function testAdminAccountExists()
    {
        // Check if the admin account exists
        $admin = Admin::getAdminAccount();

        // Assert that the admin account exists
        $this->assertNotNull($admin);
        // ...
    }
}
