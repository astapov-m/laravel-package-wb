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
        Schema::create('wildberries_fbo_sales', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->dateTime('lastChangeDate');
            $table->string('supplierArticle');
            $table->string('techSize');
            $table->string('barcode');
            $table->double('totalPrice');
            $table->double('discountPercent');
            $table->integer('isSupply')->nullable();
            $table->integer('isRealization')->nullable();
            $table->double('promoCodeDiscount')->nullable();
            $table->string('warehouseName');
            $table->string('countryName')->nullable();
            $table->string('oblastOkrugName')->nullable();
            $table->string('regionName')->nullable();
            $table->integer('incomeID');
            $table->string('saleID');
            $table->bigInteger('odid');
            $table->double('spp');
            $table->double('forPay');
            $table->double('finishedPrice');
            $table->double('priceWithDisc');
            $table->integer('nmId');
            $table->string('subject');
            $table->string('category');
            $table->string('brand');
            $table->boolean('IsStorno');
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
        Schema::dropIfExists('wildberries_fbo_sales');
    }
};
