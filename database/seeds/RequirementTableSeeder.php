<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class RequirementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create();
        for ($i=0; $i <5 ; $i++) {
         DB::table('requirements')->insert(
           array(
             'description'=>$faker->name
           )
         );
        }
    }
}
