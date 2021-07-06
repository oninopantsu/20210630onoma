<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender')->nullable()->comment('性別性別：１：男性　２：女性');
            $table->string('email')->unique('email');
            $table->string('postcode', 8)->comment('郵便番号');
            $table->string('address')->comment('住所');
            $table->string('buildingname')->comment('建物名');
            $table->text('opinion', 120)->nullable()->commment('ご意見');
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
        Schema::dropIfExists('contacts');
    }
}
