<?php
declare (strict_types=1);

namespace App\Services;

use App\Interfaces\UserInterface;

class UserService implements UserInterface
{
    public int $config;
    public function __construct(int $config, private readonly TaxService $taxService)
    {
        $this->config = $config;
    }

    public function getUserData(): array
    {
        return [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
        ];
    }
}
