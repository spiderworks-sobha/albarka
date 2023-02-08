<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PhotoGalleries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_galleries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gallery_name', 255);
            $table->text('description')->nullable();
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->useCurrent();
            $table->dateTime('deleted_at')->nullable();
        });

        Schema::create('photo_gallery_photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('photo_galleries_id');
            $table->bigInteger('media_id');
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('alt_text', 255)->nullable();
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->useCurrent();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo_galleries');
        Schema::dropIfExists('photo_gallery_photos');
    }
}
