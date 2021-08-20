<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('office_id');
            $table->string('type');
            $table->integer('directory_no'); 
            $table->string('contact_name');
            $table->string('email')->nullable()->after('contact_no');
            $table->string('contact_no')->after('contact_name')->nullable();
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
        Schema::dropIfExists('directories');
    }
}
