<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryNode extends Model
{
    protected $fillable = ['text', 'choices'];

    protected function casts(): array
    {
        return [
            'choices' => 'array',
        ];
    }
}
