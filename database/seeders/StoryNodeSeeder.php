<?php

namespace Database\Seeders;

use App\Models\StoryNode;
use Illuminate\Database\Seeder;

class StoryNodeSeeder extends Seeder
{
    public function run(): void
    {
        StoryNode::create([
            'text' => 'Dhuhr just came in during an important meeting.',
            'choices' => [
                [
                    'label' => 'Excuse yourself and pray',
                    'istiqamah' => 2,
                    'dunya' => -1,
                    'next_id' => 2,
                ],
                [
                    'label' => 'Stay and pray later',
                    'istiqamah' => -1,
                    'dunya' => 1,
                    'next_id' => 2,
                ],
            ],
        ]);

        StoryNode::create([
            'text' => 'You feel a sense of clarity after making your choice.',
            'choices' => [
                [
                    'label' => 'Continue',
                    'istiqamah' => 0,
                    'dunya' => 0,
                    'next_id' => null,
                ],
            ],
        ]);
    }
}
