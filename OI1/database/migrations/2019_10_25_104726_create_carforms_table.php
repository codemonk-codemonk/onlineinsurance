<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Carforms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('carreg');
            $table->string('modelnumber');
            $table->string('chassisnumber');
            $table->date('purchasingdate');
            $table->integer('price');
            $table->binary('uploadbill');
            $table->binary('uploadcarphoto');
            $table->binary('uploadchassisnumberphoto');
            $table->binary('uploadfront');
            $table->binary('uploadback');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
