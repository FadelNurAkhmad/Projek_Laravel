<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga')->default(125000); // default apabila user tidak mengisi maka akan otomatis mengisi
            $table->integer('harga_nameset')->default(50000);
            $table->boolean('is_ready')->default(true); // boolean untuk true / false
            $table->string('jenis')->default('Replika Ori');
            $table->float('berat')->default(0.25);
            $table->string('gambar');
            $table->integer('liga_id');
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
        Schema::dropIfExists('products');
    }
}
