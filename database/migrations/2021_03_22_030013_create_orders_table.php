<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Service;
use App\Models\Employe;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hours');
            $table->float('tax');
            $table->unsignedBigInteger('employe_id');
            $table->unsignedBigInteger('service_id');
            $table->foreign('employe_id')->references('id')->on('employes')->onDelete('cascade') ;
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->float('Total');
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
        Schema::dropIfExists('orders');
    }

    
}
