<?php

namespace Database\Seeders;

use App\Models\imageArticle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = \App\Models\article::pluck('id');

        try {
            
            DB::beginTransaction();

            foreach($articles as $key => $value) {
                imageArticle::create([
                    'url' => fake()->imageUrl(),
                    'article_id' => $value
                ]);
            }

            DB::commit();
            
        } catch (\Throwable $th) {
            
            echo $th;
            DB::rollBack();
        }
    }
}
