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
        Schema::create('tblcategory', function (Blueprint $table) {
            $table->bigIncrements('id_category')->nullable(false);
            $table->string('name_category',100)->nullable(false);
            $table->string('img_category',200)->nullable(false);
            
        });
        
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblcategory');
    }
};
