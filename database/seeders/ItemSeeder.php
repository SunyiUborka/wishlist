<?php

namespace Database\Seeders;

use App\Models\item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        item::create([
            'listid' => 1,
            'name' => 'teszt item',
            'desc' => 'valami',
            'completed' => false
        ]);
        item::create([
            'listid' => 1,
            'name' => 'teszt item1',
            'desc' => 'valami',
            'completed' => false
        ]);
        item::create([
            'listid' => 2,
            'name' => 'teszt item',
            'desc' => 'valami',
            'completed' => false
        ]);
        item::create([
            'listid' => 2,
            'name' => 'teszt item1',
            'desc' => 'valami',
            'completed' => false
        ]);
        item::create([
            'listid' => 2,
            'name' => 'teszt item',
            'desc' => 'valami',
            'completed' => false
        ]);
        item::create([
            'listid' => 2,
            'name' => 'teszt item1',
            'desc' => 'valami',
            'completed' => false
        ]);
    }
}
