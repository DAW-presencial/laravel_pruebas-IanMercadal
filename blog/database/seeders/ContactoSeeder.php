<?php

namespace Database\Seeders;

use App\Models\Contacto;
use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contacto::factory(10)->create();
    }
}
