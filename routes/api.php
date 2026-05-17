<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Get current user (requires authentication)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public API routes
Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello from API',
    ]);
});

// Example of a simple GET route
Route::get('/status', function () {
    return response()->json([
        'status' => 'API is running',
        'timestamp' => now(),
    ]);
});
