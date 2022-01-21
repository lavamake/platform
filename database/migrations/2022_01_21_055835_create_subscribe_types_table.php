<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribeTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribe_types', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description");
            $table->decimal('price',10,2)->default(0)->unsigned()->comment("价格");
            $table->enum("price_type",['month','quarter','annual'])->default('month')->comment("价格类型");
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
        Schema::dropIfExists('subscribe_types');
    }
}
