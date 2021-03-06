<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->integer('doctor_id');
            $table->integer('regiment_id');
            $table->integer('symptom_id');
            $table->integer('diagnosis_id');
            $table->date('datevisit');
            $table->integer('drugquantity');
            $table->date('appointment');
            $table->boolean('active');
            $table->string('transfer');
            $table->string('support');
            $table->string('comment');
            $table->softDeletes();
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
        Schema::dropIfExists('treatment');
    }
}
