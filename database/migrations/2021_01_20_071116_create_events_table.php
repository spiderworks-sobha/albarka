<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug', 255);
            $table->string('name', 255);
            $table->string('title', 255);
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->string('location', 1000)->nullable();
            $table->double('fees', 10, 2)->nullable();
            $table->string('short_description', 1000)->nullable();
            $table->text('content')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('featured_image_id')->nullable();
            $table->bigInteger('banner_image_id')->nullable();
            $table->string('browser_title', 255)->nullable();
            $table->string('og_title', 255)->nullable();
            $table->text('meta_description')->nullable();
            $table->text('og_description')->nullable();
            $table->bigInteger('og_image_id')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('bottom_description')->nullable();
            $table->text('extra_js')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->boolean('status')->default(1);
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->useCurrent();
            $table->dateTime('deleted_at')->nullable();
        });

        Schema::create('event_medias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('events_id');
            $table->enum('upload_type', ['Upload', 'Youtube'])->default('Upload');
            $table->string('youtube_preview', 255)->nullable();
            $table->string('youtube_url', 255)->nullable();
            $table->bigInteger('media_id')->nullable();
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
        Schema::dropIfExists('event_medias');
        Schema::dropIfExists('events');
    }
}
