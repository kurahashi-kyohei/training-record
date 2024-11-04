<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'name' => 'ベンチプレス',
            'user_id' => 1,
        ]);
        
        Event::create([
            'name' => 'スクワット',
            'user_id' => 1,
        ]);

        Event::create([
            'name' => 'デッドリフト',
            'user_id' => 1,
        ]);

    }
}
