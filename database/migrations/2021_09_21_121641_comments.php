<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('email', 255)->nullable();
            $table->string('comment', 1000);
            $table->bigInteger('parent_id')->default(0);
            $table->bigInteger('parent_levels_id')->default(0);
            $table->morphs('linkable');
            $table->boolean('status')->default(0);
            $table->bigInteger('updated_by')->nullable();
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
        //
    }
}
