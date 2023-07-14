use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserCreation()
    {
        // Create a new user
        $user = new User('John', 'Doe', 'john@example.com', 'password');

        // Assert that the user has been created
        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('John', $user->getFirstName());
        $this->assertEquals('Doe', $user->getLastName());
        $this->assertEquals('john@example.com', $user->getEmail());
        // ...
    }
}
