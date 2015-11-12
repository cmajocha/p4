<?php

use Illuminate\Database\Seeder;

class Potential_KeepersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
 {
     DB::table('potential_keepers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'last_name' => 'Gurley',
         'first_name' => 'Todd',
         '2015_draft_round' => 'undrafted',
         'fantasy_team_owner' => 'Bryan',
         'nfl_team' => 'St. Louis Rams',
     ]);

     DB::table('potential_keepers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'last_name' => 'Nelson',
         'first_name' => 'Jordy',
         '2015_draft_round' => '6th Round',
         'fantasy_team_owner' => 'Matt',
         'nfl_team' => 'Green Bay Packers',
     ]);

     DB::table('potential_keepers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'last_name' => 'Marshall',
         'first_name' => 'Brandon',
         '2015_draft_round' => '3rd Round',
         'fantasy_team_owner' => 'Marc',
         'nfl_team' => 'New York Jets',
     ]);
 }
}
