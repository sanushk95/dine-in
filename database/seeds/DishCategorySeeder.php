<?php

use Illuminate\Database\Seeder;
use App\DishCategory;

class DishCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dish_categories')->truncate();

        DishCategory::create([
            'category_name' => 'appetizer'
        ]);

        DishCategory::create([
            'category_name' => 'breakfast'
        ]);

        DishCategory::create([
            'category_name' => 'main_course'
        ]);

        DishCategory::create([
            'category_name' => 'dessert'
        ]);

        DishCategory::create([
            'category_name' => 'beverages'
        ]);
        
    }
}
