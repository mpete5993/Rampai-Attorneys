<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attorney;

class AttorneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $attorney = Attorney::create([
            'user_id' => '1',
            'slug' => 'ghkjaksfdogijmasdz-jndsfd',
            'phone' => '125879631178',
            'twitter' => 'example@twitter.com/4895522',
            'facebook' => 'example@facebook.com/hjdg7t8h4',
            'linkedIn' => 'example@linkedin.com/kfhf78u2hg4f1',
            'image' => 'images/team/team-img6.jpg',
            'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda maxime cum at modi impedit placeat! Atque alias expedita velit illum quidem dolores dicta suscipit et, sapiente eaque id aspernatur dolore voluptate aliquam aliquid eos ullam doloribus? 
                        Aperiam optio quas maiores. Nostrum eveniet ex iure suscipit error eum corporis recusandae aliquam!'

        ]);
    }
}
