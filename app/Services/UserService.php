<?php
declare (strict_types=1);

namespace App\Services;

use App\Interfaces\UserInterface;

class UserService implements UserInterface
{
    public function getUserData(): array
    {
        return [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
        ];
    }
}
