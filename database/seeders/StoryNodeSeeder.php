<?php

namespace Database\Seeders;

use App\Models\StoryNode;
use Illuminate\Database\Seeder;

class StoryNodeSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        $nodes = [
            [
                'id' => 1,
                'text' => "Dhuhr just came in during an important strategy meeting.\nYour manager is presenting quarterly projections, and you're expected to contribute.",
                'choices' => json_encode([
                    ['label' => 'Excuse yourself briefly to pray.', 'istiqamah' => 2, 'dunya' => -1, 'next_id' => 2],
                    ['label' => 'Stay and pray later.', 'istiqamah' => -1, 'dunya' => 1, 'next_id' => 2],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'text' => 'The meeting ends. You notice how your choice affected your focus and mood.',
                'choices' => json_encode([
                    ['label' => 'Reflect quietly on whether you prioritised correctly.', 'istiqamah' => 1, 'dunya' => 0, 'next_id' => 3],
                    ['label' => "Brush it off. It's just one prayer.", 'istiqamah' => -1, 'dunya' => 1, 'next_id' => 3],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'text' => 'Your Fajr alarm rings after sleeping at 1:30AM finishing a proposal.',
                'choices' => json_encode([
                    ['label' => 'Get up immediately.', 'istiqamah' => 2, 'dunya' => -1, 'next_id' => 4],
                    ['label' => 'Snooze and sleep in.', 'istiqamah' => -2, 'dunya' => 1, 'next_id' => 4],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'text' => 'A major client schedules a lunch meeting during Jumuah time.',
                'choices' => json_encode([
                    ['label' => 'Politely request a slight reschedule.', 'istiqamah' => 2, 'dunya' => -1, 'next_id' => 5],
                    ['label' => 'Attend the lunch and skip Jumuah.', 'istiqamah' => -3, 'dunya' => 2, 'next_id' => 5],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 5,
                'text' => 'Your manager hints that promotion decisions are near.',
                'choices' => json_encode([
                    ['label' => 'Double down on visibility, even if it affects prayer consistency.', 'istiqamah' => -1, 'dunya' => 3, 'next_id' => 6],
                    ['label' => 'Maintain boundaries and trust your effort.', 'istiqamah' => 2, 'dunya' => -1, 'next_id' => 7],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 6,
                'text' => 'You begin staying later daily. Salah becomes rushed.',
                'choices' => json_encode([
                    ['label' => "Tell yourself it's temporary sacrifice.", 'istiqamah' => -2, 'dunya' => 2, 'next_id' => 8],
                    ['label' => 'Feel uneasy about the pattern forming.', 'istiqamah' => 1, 'dunya' => 0, 'next_id' => 8],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 7,
                'text' => 'You keep firm boundaries. Some colleagues respect it. Others question your ambition.',
                'choices' => json_encode([
                    ['label' => 'Stay confident in your balance.', 'istiqamah' => 2, 'dunya' => -1, 'next_id' => 8],
                    ['label' => "Wonder if you're limiting your growth.", 'istiqamah' => -1, 'dunya' => 1, 'next_id' => 8],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 8,
                'text' => 'A Muslim colleague quietly tells you they admire your discipline.',
                'choices' => json_encode([
                    ['label' => 'Feel encouraged and strengthen your routine.', 'istiqamah' => 2, 'dunya' => -1, 'next_id' => 9],
                    ['label' => 'Downplay it and return focus to work metrics.', 'istiqamah' => -1, 'dunya' => 1, 'next_id' => 9],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 9,
                'text' => 'Ramadan begins during the busiest quarter of the year.',
                'choices' => json_encode([
                    ['label' => 'Adjust schedule to protect energy and prayers.', 'istiqamah' => 2, 'dunya' => -1, 'next_id' => 10],
                    ['label' => 'Push through aggressively to outperform peers.', 'istiqamah' => -2, 'dunya' => 2, 'next_id' => 10],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 10,
                'text' => 'Burnout hits. You feel spiritually distant and physically drained.',
                'choices' => json_encode([
                    ['label' => 'Ignore it and keep grinding.', 'istiqamah' => -2, 'dunya' => 2, 'next_id' => 11],
                    ['label' => 'Pause and reassess your direction.', 'istiqamah' => 2, 'dunya' => -1, 'next_id' => 12],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 11,
                'text' => 'You start delaying prayers more often.',
                'choices' => json_encode([
                    ['label' => 'Accept this as the cost of ambition.', 'istiqamah' => -3, 'dunya' => 2, 'next_id' => 13],
                    ['label' => 'Feel regret but take no action.', 'istiqamah' => -1, 'dunya' => 0, 'next_id' => 13],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 12,
                'text' => 'You reorganise your schedule and rebuild discipline.',
                'choices' => json_encode([
                    ['label' => 'Commit to consistency even if promotion slows.', 'istiqamah' => 3, 'dunya' => -1, 'next_id' => 13],
                    ['label' => 'Try balancing but remain inconsistent.', 'istiqamah' => 1, 'dunya' => 0, 'next_id' => 13],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 13,
                'text' => 'You receive news: promotion decisions are finalised.',
                'choices' => json_encode([
                    ['label' => 'Accept outcome with gratitude and introspection.', 'istiqamah' => 1, 'dunya' => 0, 'next_id' => 14],
                    ['label' => 'Measure your worth purely by title and salary.', 'istiqamah' => -2, 'dunya' => 2, 'next_id' => 15],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 14,
                'text' => "Years later, your career grows steadily.\nYour discipline becomes your anchor.\nYou are respected not only for performance, but integrity.",
                'choices' => json_encode([
                    ['label' => 'Restart story', 'istiqamah' => 0, 'dunya' => 0, 'next_id' => null],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 15,
                'text' => "Your résumé shines.\nYet moments of silence feel heavy.\nYou wonder when you slowly traded grounding for growth.",
                'choices' => json_encode([
                    ['label' => 'Restart story', 'istiqamah' => 0, 'dunya' => 0, 'next_id' => null],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        StoryNode::insert($nodes);
    }
}
