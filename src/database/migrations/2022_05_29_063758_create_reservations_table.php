<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer("number")->nullable(false);
            $table->datetime("datetime")->nullable(false);
            $table->unsignedBigInteger("shop_id");
            $table->unsignedBigInteger("client_id");
            $table->timestamps();

            $table  ->foreign("shop_id")
                    ->references("id")
                    ->on("shops")
                    ->onDelete("cascade");

            $table  ->foreign("client_id")
                    ->references("id")
                    ->on("clients")
                    ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
