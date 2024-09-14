<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            'Sac à main',
            'Perruque',
            'Mackup'
        ];
        try {
            
            DB::beginTransaction();

            foreach($categories as $key => $value) {
                categories::create(attributes: [
                    'titre' => $value,
                    'description' => fake()->text(),
                ]);
            }

            DB::commit();
            
        } catch (\Throwable $th) {
            echo $th;
            DB::rollback();
        }
    }
}
