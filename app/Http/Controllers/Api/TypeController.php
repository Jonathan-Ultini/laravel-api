<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\JsonResponse;

class TypeController extends Controller
{
    public function index(): JsonResponse
    {
        $types = Type::all();
        return response()->json($types);
    }
}
