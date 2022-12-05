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
        Schema::create('wb_incomes', function (Blueprint $table) {
            $table->id();
            $table->integer('incomeId');
            $table->string('number');
            $table->dateTime('date');
            $table->dateTime('lastChangeDate');
            $table->string('supplierArticle');
            $table->string('techSize');
            $table->string('barcode');
            $table->integer('quantity');
            $table->double('totalPrice');
            $table->dateTime('dateClose');
            $table->string('warehouseName');
            $table->integer('nmId');
            $table->string('status');
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
        Schema::dropIfExists('wb_incomes');
    }
};
