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
        Schema::create('wb_orders', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->dateTime('lastChangeDate');
            $table->string('supplierArticle');
            $table->string('techSize');
            $table->string('barcode');
            $table->double('totalPrice');
            $table->integer('discountPercent');
            $table->string('warehouseName');
            $table->string('oblast')->nullable();
            $table->integer('incomeID');
            $table->bigInteger('odid');
            $table->integer('nmId');
            $table->string('subject');
            $table->string('category');
            $table->string('brand');
            $table->tinyInteger('isCancel')->nullable();
            $table->dateTime('cancel_dt')->nullable();
            $table->string('gNumber');
            $table->string('sticker')->nullable();
            $table->string('srid');
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
        Schema::dropIfExists('wb_orders');
    }
};
