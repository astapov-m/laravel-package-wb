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
        Schema::create('wildberries_fbo_stocks', function (Blueprint $table) {
            $table->id();
            $table->dateTime('lastChangeDate')->nullable();
            $table->string('supplierArticle');
            $table->string('techSize');
            $table->string('barcode');
            $table->integer('quantity');
            $table->integer('isSupply')->nullable();
            $table->integer('isRealization')->nullable();
            $table->integer('quantityFull');
            $table->integer('quantityNotInOrders')->default(0);
            $table->integer('warehouse');
            $table->string('warehouseName');
            $table->integer('inWayToClient');
            $table->integer('inWayFromClient');
            $table->integer('nmId');
            $table->string('subject');
            $table->string('category');
            $table->integer('daysOnSite');
            $table->string('brand');
            $table->string('SCCode');
            $table->double('Price');
            $table->integer('Discount');
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
        Schema::dropIfExists('wildberries_fbo_stocks');
    }
};
