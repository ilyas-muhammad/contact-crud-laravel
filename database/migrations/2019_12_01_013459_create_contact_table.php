<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('group_id');
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->longText('address');
            $table->string('city', 50);
            $table->integer('zip')->unsigned();
            $table->string('country', 50);
            $table->text('email');
            $table->string('phone', 25);
            $table->longText('note')->nullable();
            $table->string('avatar_url', 100)->nullable();
            $table->timestamps();

            $table->foreign('group_id')
                  ->references('id')
                  ->on('group')
                  ->delete('cascade');

            $table->index('group_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
        Schema::dropIndex(['group_id']);
    }
}
