<?php

namespace App\Http\Controllers;

use App\Models\StoryNode;
use Illuminate\Http\JsonResponse;

class StoryController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(StoryNode::all());
    }

    public function start(): JsonResponse
    {
        $node = StoryNode::orderBy('id')->first();
        if (!$node) {
            return response()->json(['message' => 'No story nodes found'], 404);
        }
        return response()->json($node);
    }

    public function show(int $id): JsonResponse
    {
        $node = StoryNode::find($id);
        if (!$node) {
            return response()->json(['message' => 'Node not found'], 404);
        }
        return response()->json($node);
    }
}
