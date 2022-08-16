<?php

use App\Constants\UserStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_subject', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sub')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_sub')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->float('score')->default(0);
            $table->tinyInteger('status')->default(UserStatus::FAILED);
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
        Schema::dropIfExists('user_subject');
    }
}
