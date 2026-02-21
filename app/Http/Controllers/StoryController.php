<?php

namespace App\Http\Controllers;

use App\Models\StoryNode;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function start(): JsonResponse
    {
        $node = StoryNode::orderBy('id')->first();
        if (!$node) {
            return response()->json(['message' => 'Story node not found'], 404);
        }
        return response()->json($node);
    }

    public function show(int $id): JsonResponse
    {
        $node = StoryNode::find($id);
        if (!$node) {
            return response()->json(['message' => 'Story node not found'], 404);
        }
        return response()->json($node);
    }

    public function next(Request $request): JsonResponse
    {
        $nextId = $request->input('next_id');
        if ($nextId === null) {
            return response()->json([
                'ending' => true,
                'message' => 'End of story',
            ]);
        }
        $node = StoryNode::find($nextId);
        if (!$node) {
            return response()->json(['message' => 'Story node not found'], 404);
        }
        return response()->json($node);
    }
}
