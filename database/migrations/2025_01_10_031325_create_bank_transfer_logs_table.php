<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankTransferLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_transfer_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_user_id'); 
            $table->unsignedBigInteger('receiver_user_id'); 
            $table->decimal('amount', 15, 2); 
            $table->timestamps(); 


            $table->foreign('sender_user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('receiver_user_id')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_transfer_logs');
    }
}
