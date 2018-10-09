<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('inactive');
            $table->string('name');
            $table->integer('parent_id');
            $table->integer('level');
            $table->string('page_url');
            $table->string('head_title');
            $table->string('page_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('log_for_user', function (Blueprint $table) {
//            $table->string('error_message')->change();
//        });
    }
}
