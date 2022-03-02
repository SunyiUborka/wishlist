<?php

namespace Database\Seeders;

use App\Models\lista;
use Illuminate\Database\Seeder;

class ListaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        lista::create([
            'name' => "teszt lista",
            'member' => "csehi.rolcsi@gmail.com"
        ]);
        lista::create([
            'name' => "teszt lista",
            'member' => "csehi.rolcsi@gmail.com"
        ]);
        lista::create([
            'name' => "teszt lista",
            'member' => "csehi.rolcsi@gmail.com"
        ]);
        lista::create([
            'name' => "teszt lista",
            'member' => "csehi.rolcsi@gmail.com"
        ]);
    }
}
