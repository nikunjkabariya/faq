<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 110);
            
            $table->unsignedTinyInteger('faq_topic_id')->index();
            $table->foreign('faq_topic_id')->references('id')->on('faq_topics')->onDelete('cascade');
            
            $table->string('question');
            $table->text('answer');
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive')->index();
            $table->timestamps();
            $table->softDeletes();
            //$table->dropForeign('faqs_faq_topic_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
