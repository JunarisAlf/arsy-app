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
        Schema::create('layaway_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('layaway_id');
            $table->integer('month');
            $table->date('jatuh_tempo');
            $table->integer('paid')->nullable(true);
            $table->date('paid_at')->nullable(true);
            $table->string('note')->nullable(true);
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
        Schema::dropIfExists('layaway_details');
    }
};
