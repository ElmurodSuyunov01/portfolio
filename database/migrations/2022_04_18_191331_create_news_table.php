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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title_uz');
            $table->string('title_oz');
            $table->string('title_ru');
            $table->string('desc_oz');
            $table->string('desc_uz');
            $table->string('desc_ru');
            $table->string('body_uz');
            $table->string('body_oz');
            $table->string('body_ru');
            $table->foreignId('category');
            $table->foreignId('region')->nullable();
            $table->bigInteger();
            $table->tinyInteger();
            $table->


            $this->timestamp('created_by')->nullable();
            $this->timestamp('updated_by')->nullable();
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
        Schema::dropIfExists('news');
    }
};
