<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('shores', function (Blueprint $table)
            {
                    $table->id();
                    $table->timestamps();
                    $table->string('name', 200);
                    $table->string('location', 200);
                    $table->smallInteger('number_of_umbrellas');
                    $table->smallInteger('number_of_bed');
                    $table->string('price', 100);
                    $table->date('opening_date');
                    $table->date('closing_date');
                    $table->boolean('has_volley_beach');
                    $table->boolean('has_soccer_field');
            });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shores');
    }
};
