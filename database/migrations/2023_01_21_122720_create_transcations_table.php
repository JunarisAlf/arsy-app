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
        Schema::create('transcations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id'); //cash in or out.
            // $table->foreignId('category_id'); //ex: material,alat-kantor,dll
            // $table->foreignId('stock_id'); //semen,batu-bata
            // $table->foreignId('project_id')->nullable(true); // ditujukan ke project mana?
            $table->string('name'); //??
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('final_price');
            $table->bigInteger('saldo');
            $table->string('unit');
            $table->enum('status', ['lunas', 'hutang', 'cash']);
            $table->date('jatuh_tempo')->nullable(true);
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
        Schema::dropIfExists('transcations');
    }
};
