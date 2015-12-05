<?php

use Illuminate\Database\Seeder;

class TeammembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
 {
     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Andy',
         'last' => 'Dalton',
         'team' => 'Cincinnati',
         'position' => 'Quarterback',
         'keeper' => 'no',
         'user_id' => 2,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Demarco',
         'last' => 'Murray',
         'team' => 'Dallas',
         'position' => 'Running Back',
         'keeper' => 'no',
         'user_id' => 2,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Demaryius',
         'last' => 'Thomas',
         'team' => 'Denver',
         'position' => 'Wide Receiver',
         'keeper' => 'no',
         'user_id' => 2,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'A.J.',
         'last' => 'Green',
         'team' => 'Cincinnati',
         'position' => 'Wide Receiver',
         'keeper' => 'no',
         'user_id' => 2,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Rob',
         'last' => 'Gronkowski',
         'team' => 'New England',
         'position' => 'Tight End',
         'keeper' => 'yes',
         'user_id' => 2,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Matt',
         'last' => 'Forte',
         'team' => 'Chicago',
         'position' => 'Running Back',
         'keeper' => 'yes',
         'user_id' => 2,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'T.Y.',
         'last' => 'Hilton',
         'team' => 'Indianapolis',
         'position' => 'Wide Receiver',
         'keeper' => 'no',
         'user_id' => 2,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Andrew',
         'last' => 'Luck',
         'team' => 'Indianapolis',
         'position' => 'Quarterback',
         'keeper' => 'no',
         'user_id' => 2,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Julian',
         'last' => 'Edelman',
         'team' => 'New England',
         'position' => 'Wide Receiver',
         'keeper' => 'no',
         'user_id' => 2,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Derek',
         'last' => 'Carr',
         'team' => 'Oakland',
         'position' => 'Quarterback',
         'keeper' => 'no',
         'user_id' => 2,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Thomas',
         'last' => 'Rawls',
         'team' => 'Seattle',
         'position' => 'Running Back',
         'keeper' => 'yes',
         'user_id' => 2,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Dez',
         'last' => 'Bryant',
         'team' => 'Dallas',
         'position' => 'Wide Receiver',
         'keeper' => 'no',
         'user_id' => 2,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Ben',
         'last' => 'Roethliesberger',
         'team' => 'Pittsburgh',
         'position' => 'Quarterback',
         'keeper' => 'no',
         'user_id' => 1,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Darren',
         'last' => 'McFadden',
         'team' => 'Oakland',
         'position' => 'Running Back',
         'keeper' => 'no',
         'user_id' => 1,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Brandin',
         'last' => 'Cooks',
         'team' => 'New Orleans',
         'position' => 'Wide Reciever',
         'keeper' => 'yes',
         'user_id' => 1,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Eric',
         'last' => 'Decker',
         'team' => 'NY Jets',
         'position' => 'Wide Reciever',
         'keeper' => 'yes',
         'user_id' => 1,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Randall',
         'last' => 'Cobb',
         'team' => 'Green Bay',
         'position' => 'Wide Receiver',
         'keeper' => 'no',
         'user_id' => 1,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Greg',
         'last' => 'Olsen',
         'team' => 'Carolina',
         'position' => 'Tight End',
         'keeper' => 'no',
         'user_id' => 1,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'C.J.',
         'last' => 'Andersen',
         'team' => 'Denver',
         'position' => 'Running Back',
         'keeper' => 'no',
         'user_id' => 1,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Ronnie',
         'last' => 'Hillman',
         'team' => 'Denver',
         'position' => 'Running Back',
         'keeper' => 'no',
         'user_id' => 1,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Emmanuel',
         'last' => 'Sanders',
         'team' => 'Denver',
         'position' => 'Wide Receiver',
         'keeper' => 'no',
         'user_id' => 1,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Kamar',
         'last' => 'Aiken',
         'team' => 'Baltimore',
         'position' => 'Wide Receiver',
         'keeper' => 'yes',
         'user_id' => 1,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Danny',
         'last' => 'Amendola',
         'team' => 'New England',
         'position' => 'Wide Reciever',
         'keeper' => 'no',
         'user_id' => 1,
     ]);

     DB::table('teammembers')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'first' => 'Shaun',
         'last' => 'Draughn',
         'team' => 'San Francisco',
         'position' => 'Running Back',
         'keeper' => 'no',
         'user_id' => 1,
     ]);
 }
}
