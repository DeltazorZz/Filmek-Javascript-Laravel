<?php

use App\Models\Filmek;
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
        Schema::create('filmeks', function (Blueprint $table) {
            $table->id();
            $table->string('cim');
            $table->string('rendezo');
            $table->string('kiadas');
            $table->string('ar');
            $table->timestamps();
        });
        Filmek::create(['cim'=>'Avatar','rendezo'=>'james Cameron','kiadas'=>'2009','ar'=>'3000']);
        Filmek::create(['cim'=>'Bohókás Karácsony','rendezo'=>'Nagy Imre','kiadas'=>'2013','ar'=>'1500']);
        Filmek::create(['cim'=>'Holnap után','rendezo'=>'Jaden Smith','kiadas'=>'2005','ar'=>'600']);
        Filmek::create(['cim'=>'Minden Minden','rendezo'=>'Kis Anita','kiadas'=>'2018','ar'=>'3400']);
        Filmek::create(['cim'=>'Onec upon a Hollywood','rendezo'=>'Quentie Tarantino','kiadas'=>'2021','ar'=>'9990']);
        Filmek::create(['cim'=>'A fiú akit Karácsonynak Hívtak','rendezo'=>'Karácsony Gergely','kiadas'=>'2015','ar'=>'780']);
    
    
    
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmeks');
    }
};
