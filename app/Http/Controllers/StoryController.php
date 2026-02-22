<?php

namespace App\Http\Controllers;

use App\Models\StoryNode;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

#[OA\Tag(name: 'story', description: 'Branching story node API')]
class StoryController extends Controller
{
    #[OA\Get(
        path: '/api/story/start',
        summary: 'Get first story node',
        tags: ['story'],
        responses: [
            new OA\Response(response: 200, description: 'First story node (id, text, choices)'),
            new OA\Response(response: 404, description: 'No story nodes found')
        ]
    )]
    public function start(): JsonResponse
    {
        $node = StoryNode::orderBy('id')->first();
        if (!$node) {
            return response()->json(['message' => 'Story node not found'], 404);
        }
        return response()->json($node);
    }

    #[OA\Get(
        path: '/api/story/{id}',
        summary: 'Get story node by id',
        tags: ['story'],
        parameters: [
            new OA\PathParameter(name: 'id', description: 'Story node id', required: true, schema: new OA\Schema(type: 'integer'))
        ],
        responses: [
            new OA\Response(response: 200, description: 'Story node (id, text, choices)'),
            new OA\Response(response: 404, description: 'Story node not found')
        ]
    )]
    public function show(string|int $id): JsonResponse
    {
        if (!is_numeric($id)) {
            return response()->json(['message' => 'Story node not found'], 404);
        }
        $node = StoryNode::find((int) $id);
        if (!$node) {
            return response()->json(['message' => 'Story node not found'], 404);
        }
        return response()->json($node);
    }

    #[OA\Post(
        path: '/api/story/next',
        summary: 'Get next story node by choice',
        tags: ['story'],
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                required: ['next_id'],
                properties: [
                    new OA\Property(property: 'next_id', description: 'ID of next node, or null for end of story', type: 'integer', nullable: true)
                ],
                example: ['next_id' => 2]
            )
        ),
        responses: [
            new OA\Response(response: 200, description: 'Story node, or ending object (ending: true, message: "End of story")'),
            new OA\Response(response: 404, description: 'Story node not found')
        ]
    )]
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
