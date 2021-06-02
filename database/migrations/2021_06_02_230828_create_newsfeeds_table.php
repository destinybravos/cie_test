<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsfeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsfeeds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->mediumText('content');
            $table->enum('view_status', ['Everyone', 'Only me', 'People I Follow', 'People Following Me', 'Anonymous'])->default('Everyone');
            $table->enum('feedtype', ['post', 'activity', 'update'])->nullable()->default('post');
            $table->string('feature_img', 255)->nullable();
            $table->mediumText('extras')->nullable();
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
        Schema::dropIfExists('newsfeeds');
    }
}
