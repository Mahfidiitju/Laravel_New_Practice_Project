<?php

namespace App\Http\Controllers;

use App\Interfaces\UserInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(private readonly UserInterface $userService)
    {
        
    }
    
    public function index(Request $request)
    {
        $userData = $this->userService->getUserData();
        return response()->json([
            'message' => 'User index here',
            'user' => $userData,
        ]);
    }
}
