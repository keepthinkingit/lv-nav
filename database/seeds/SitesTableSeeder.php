<?php
/**
 * User: KeepThinkingIt
 */
use Illuminate\Database\Seeder;
use App\Site;

class SitesTableSeeder extends Seeder
{


    public function run()
    {
        $types = factory(Site::class, 56)->create();
    }

}
