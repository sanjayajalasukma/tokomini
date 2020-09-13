<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('slug')->nullable();
            $table->enum('kategori', ['handphone', 'laptop', 'pc', 'mouse', 'keyboard', 'memory', 'speaker'])->nullable();
            $table->string('nama')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('harga')->nullable();
            $table->enum('status', ['Tersedia', 'Kosong'])->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('barangs');
    }
}
