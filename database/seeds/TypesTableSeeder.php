<?php
/**
 * User: KeepThinkingIt
 */
use Illuminate\Database\Seeder;
use App\Type;

class TypesTableSeeder extends Seeder
{


    public function run()
    {
        $types = factory(Type::class, 14)->create();
    }

}
