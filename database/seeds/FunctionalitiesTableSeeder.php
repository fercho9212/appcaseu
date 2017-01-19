<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FunctionalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

         DB::table('funcionalities')->insert(
           [
             'description'=>'this his description',
             'requirement_id'=>'1'
           ]
         );
         DB::table('funcionalities')->insert(
           [
             'description'=>'this his description',
             'requirement_id'=>'1'
           ]
         );
         DB::table('funcionalities')->insert(
           [
             'description'=>'this his description',
             'requirement_id'=>'2'
           ]
         );
         DB::table('funcionalities')->insert(
           [
             'description'=>'this his description',
             'requirement_id'=>'3'
           ]
         );

    }
}
