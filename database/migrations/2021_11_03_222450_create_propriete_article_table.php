<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprieteArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propriete_article', function (Blueprint $table) {
            $table->id();
            $table->string("estObligatoire")->default(1);
            $table->foreignId("type_article_id");
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('propriete_article', function (Blueprint $table) {
            $table->dropForeign("type_article_id");
        });
        Schema::dropIfExists('propriete_article');
    }
}
