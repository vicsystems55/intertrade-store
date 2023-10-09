<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreSubDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_sub_details', function (Blueprint $table) {
            $table->id();
            $table->string('store_name');
            $table->string('store_desc');
            $table->string('store_logo');
            $table->string('store_url');
            $table->string('store_db');
            $table->string('store_favicon');
            $table->string('sub_start_date');
            $table->string('sub_end_date');
            $table->string('split_code');
            $table->string('bank_name');
            $table->string('account_name');
            $table->string('account_no');
            $table->string('auth_code')->nullable();
            $table->boolean('sub_status')->default(true);
            $table->foreignId('plug_play_sub_id')->nullable();
            $table->foreignId('user_id')->nullable();


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
        Schema::dropIfExists('store_sub_details');
    }
}
