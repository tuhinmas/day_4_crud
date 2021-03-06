<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi');
            $table->timestamps();
        });
        Schema::table('answers', function (Blueprint $table) {
            $table->integer('q_id')->unsigned()->nullable()->after('id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
        Schema::table('answers', function (Blueprint $table) {
            // 2. Drop the column
            $table->dropColumn('q_id');    

    });
}
}
