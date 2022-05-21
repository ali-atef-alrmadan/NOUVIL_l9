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
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("office_id");
            $table->string("name");
            $table->integer('age');
            $table->string('country');
            $table->string('language');
            $table->string('Social_status');
            $table->string('Experience');
            $table->string("religon");
            $table->string('worker_photo_path', 2048)->nullable();
            $table->string('Available');
            $table->timestamps();

            $table->foreign('office_id')->on('offices')->references('id')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
};
