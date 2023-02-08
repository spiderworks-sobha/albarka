<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('careers_id');
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('phone_number', 25);
            $table->text('message', 255)->nullable();
            $table->text('extra_data', 255)->nullable();
            $table->string('resume', 255);
            $table->string('ip_address', 255);
            $table->text('user_agent');
            $table->string('referrer_link', 255)->nullable();
            $table->text('remarks', 255)->nullable();
            $table->string('status', 50)->default('Open');
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
        Schema::dropIfExists('job_applications');
    }
}
