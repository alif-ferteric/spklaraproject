<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan_id');
            $table->string('user_id');
            $table->string('k1');
            $table->integer('k2');
            $table->integer('k3');
            $table->integer('k4');
            $table->integer('k5');
            $table->integer('k6');
            $table->integer('k7');
            $table->integer('k8');
            $table->integer('k9');
            $table->integer('k10');
            $table->integer('k11');
            $table->integer('k12');
            $table->integer('k13');
            $table->integer('k14');
            $table->integer('k15');
            $table->integer('k16');
            $table->integer('k17');
            $table->integer('k18');
            $table->integer('k19');
            $table->integer('k20');
            $table->integer('k21');
            $table->integer('k22');
            $table->integer('k23');
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
        Schema::dropIfExists('nilais');
    }
}
