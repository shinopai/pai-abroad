<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dests', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description', 300);
            $table->integer('price')->unsigned();
            $table->string('image');
            $table->timestamps();

            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');
            $table->foreignId('area_id')
                  ->constrained()
                  ->onDelete('cascade');
            $table->foreignId('study_id')
                  ->constrained()
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dests');
    }
}
