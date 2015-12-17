<?php

use Illuminate\Database\Seeder;
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;

class AllplayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $lexer = new Lexer(new LexerConfig());
      $interpreter = new Interpreter();
      $interpreter->addObserver(function(array $row) {
        DB::table('allplayers')->insert([
          'position' => $row[0],
          'first' => $row[1],
          'last' => $row[2],
          'nflteam' => $row[3],
          'plfteam' => $row[4],
          'draftround' => $row[5],
          'keepereligible' => $row[6],
          'howmanyyears' => $row[7],
]);
});
$lexer->parse(database_path() . '/seeds/allplayers.csv', $interpreter);
    }
}
