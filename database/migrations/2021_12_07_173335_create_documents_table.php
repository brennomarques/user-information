<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->string('subscription_numbers', 150);
            $table->string('signature_responsible', 150);
            $table->string('number_page', 10);
            $table->string('document_size', 10);
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
        Schema::connection('pgsql')->dropIfExists('documents');
    }
}
