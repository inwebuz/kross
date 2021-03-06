<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable();
            $table->string('value')->nullable();
            $table->string('name')->nullable();
            $table->string('group')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->mediumText('description')->nullable();
            $table->text('image')->nullable();
            $table->text('file')->nullable();
            $table->string('file_name')->nullable();
            $table->text('svg')->nullable();
            $table->integer('sort_number')->default(0);
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
        Schema::dropIfExists('settings');
    }
}
