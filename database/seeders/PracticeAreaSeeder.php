<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PracticeArea;

class PracticeAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $practice_area = PracticeArea::create([
            'name' => 'Defamation',
            'slug' => 'defamation',
            'image' => 'images/service/large-1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda maxime cum at modi impedit placeat! Atque alias expedita velit illum quidem dolores dicta suscipit et, sapiente eaque id aspernatur dolore voluptate aliquam aliquid eos ullam doloribus? 
                            Aperiam optio quas maiores. Nostrum eveniet ex iure suscipit error eum corporis recusandae aliquam!'
        ]);
    }
}
