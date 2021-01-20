<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('store_id');
            $table->string("first_name");
            $table->string("last_name");
            $table->string("emailadress");
            $table->integer("phonenumber");
            $table->string("adress");
            $table->integer("vat_number");
            $table->timestamps();
        });

        Schema::table('customers', function($table) {
            //Relations
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
        $table->dropForeign('store_id');
    }
}
