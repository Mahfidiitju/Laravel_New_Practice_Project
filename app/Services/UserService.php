<?php
declare (strict_types=1);

namespace App\Services;

class UserService
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
