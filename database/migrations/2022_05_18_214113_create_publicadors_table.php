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
        Schema::create('publicador', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('nome', 255);
            $table->string('telefone', 15);
            $table->string('email', 50);
            $table->string('morada', 255);
            $table->date('recebido');
            $table->date('devolver');
            $table->foreignId('territorio_id')->constrained()->cascadeOnDelete();
            $table->foreignId('grupo_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        /*Schema::table('publicador', function (Blueprint $table) {
            $table->foreign('territorio_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->references('id')
            ->on('territorio');
        });

        Schema::table('publicador', function (Blueprint $table) {
            $table->foreign('grupo_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->references('id')
            ->on('grupo');
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicador');
    }
};
