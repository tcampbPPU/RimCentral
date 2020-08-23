<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('permission_level_id');
            $table->string('name')->nullable();
            $table->string('display_name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('permissions', function ($table) {
            $table->foreign('permission_level_id')->references('id')->on('permission_levels')->onDelete('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
