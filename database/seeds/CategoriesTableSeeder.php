<?php
/**
 * User: KeepThinkingIt
 */
use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{


    public function run()
    {
        $types = factory(Category::class, 5)->create();
    }

}
