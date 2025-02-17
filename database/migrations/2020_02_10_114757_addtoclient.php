<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Addtoclient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('title');
            $table->string('name');
            $table->string('lastname');
            $table->text('address');
            
            $table->string('city');
            // $table->string('state');
            $table->string('email');
            $table->integer('roomNo')->nullable($value=true);
            $table->date('date');
            $table->date('ldate')->nullable($value=true);
            $table->integer('recentCondition')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn(['title','name','lastname','address','city','email','roomNo','date','ldate','recentCondition']);
        });
    }
}
