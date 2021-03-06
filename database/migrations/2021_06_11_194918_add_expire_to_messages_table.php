<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExpireToMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::table ('messages', function (Blueprint $table) 
        {
            $table -> timestamp ('expiry_time') -> default (DB::raw ('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::table ('messages', function (Blueprint $table) 
        {
            $table -> dropColumn ('expiry_time');
        });
    }
}
