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
        Schema::create('grupo', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->integer('quant_pub');
            $table->string('sup', 255);
            $table->string('aju', 255);
            $table->string('tel_sup', 15);
            $table->string('tel_aju', 15);
            $table->foreignId('territorio_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        /*Schema::table('grupo', function (Blueprint $table) {
            $table->foreign('territorio_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->references('id')
            ->on('territorio');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo');
    }
};
