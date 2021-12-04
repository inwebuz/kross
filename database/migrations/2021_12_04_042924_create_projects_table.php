<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->mediumText('description')->nullable();
            $table->decimal('price', 12, 2)->default(0);
            $table->text('file')->nullable();
            $table->string('file_name')->nullable();
            $table->text('image')->nullable();
            $table->text('images')->nullable();
            $table->text('background')->nullable();
            $table->text('seo_title', 5000)->nullable();
            $table->text('meta_description', 5000)->nullable();
            $table->text('meta_keywords', 5000)->nullable();
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
        Schema::dropIfExists('projects');
    }
}
