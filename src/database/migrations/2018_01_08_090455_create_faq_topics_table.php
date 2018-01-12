<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_topics', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('slug', 110);
            $table->string('topic_name', 100);
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive')->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_topics');
    }
}
