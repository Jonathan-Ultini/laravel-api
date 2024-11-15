<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\JsonResponse;

class ProjectController extends Controller
{
    public function index(): JsonResponse
    {
        $projects = Project::all();
        return response()->json($projects);
    }

    public function show($id)
    {
        $project = Project::with(['type', 'technologies'])->find($id);

        if (!$project) {
            return response()->json(['message' => 'Progetto non trovato'], 404);
        }

        return response()->json($project);
    }
}
