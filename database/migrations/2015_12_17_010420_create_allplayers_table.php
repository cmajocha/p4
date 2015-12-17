<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllplayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('allplayers', function (Blueprint $table) {

      # Increments method will make a Primary, Auto-Incrementing field.
      # Most tables start off this way
      $table->increments('id');

      # This generates two columns: `created_at` and `updated_at` to
      # keep track of changes to a row
      $table->timestamps();

      # The rest of the fields...
      $table->string('position');
      $table->string('first');
      $table->string('last');
      $table->string('nflteam');
      $table->string('plfteam');
      $table->string('draftround');
      $table->string('keepereligible');
      $table->string('howmanyyears');

      # FYI: We're skipping the 'tags' field for now; more on that later.

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('allplayers');
    }
}
