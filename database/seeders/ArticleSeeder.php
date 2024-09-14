<?php

namespace Database\Seeders;

use App\Models\article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $categories = \App\Models\categories::pluck('id');
        try {

            DB::beginTransaction();

            for ($i=0; $i < 30 ; $i++) {
                
                foreach($categories as $key => $value) {

                    article::create(attributes: [
                        'libelle' => fake()->title(),
                        'description' => fake()->text(),
                        'quantité' => random_int(0,20),
                        'prix' => random_int(min: 1000, max: 500000),
                        'categories_id' => $value,
                    ]);
                }
            }

            DB::commit();
        } catch (\Throwable $th) {
            
            echo $th;
            DB::rollBack();
        }


    }
}
