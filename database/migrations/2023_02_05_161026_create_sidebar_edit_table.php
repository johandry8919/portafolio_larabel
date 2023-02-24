<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidebar_edit', function (Blueprint $table) {
            $table->id();
            $table->text('imagen');
            $table->string('edit_nombre');
            $table->text('edit_decricion');
            $table->string('facebook');
            $table->string('github');
            $table->string('LinkedIn');
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
        Schema::dropIfExists('sidebar_edit');
    }
};
