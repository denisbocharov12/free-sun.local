<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalculatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculators', function (Blueprint $table) {
            $table->id();
            $table->string('monthly_electricity');
            $table->string('heated_area');
            $table->string('required_power');
            $table->string('required_qty');
            $table->string('required_area_roof');
            $table->string('required_area_earth');
            $table->string('offer_email')->nullable()->default(null);
            $table->string('offer_phone');
            $table->string('offer_name_surname');
            $table->string('offer_comment')->nullable()->default(null);
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
        Schema::dropIfExists('calculators');
    }
}
