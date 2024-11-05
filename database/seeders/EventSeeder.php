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
        ]);
        
        Event::create([
            'name' => 'スクワット',
        ]);

        Event::create([
            'name' => 'デッドリフト',
        ]);

    }
}
