<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ApiExampleController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'message' => 'This is an example API endpoint.',
            'data' => [
                'id' => 1,
                'name' => 'Example Item',
                'description' => 'This is a description of the example item.',
            ],
        ]);
    }
}