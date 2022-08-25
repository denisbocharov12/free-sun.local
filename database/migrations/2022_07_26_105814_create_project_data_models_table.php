<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectDataModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_data_models', function (Blueprint $table) {
            $table->id();
            $table->float('cost_electro_before')->nullable()->default(null);
            $table->float('cost_electro_after')->nullable()->default(null);
            $table->float('cost_otoplen_before')->nullable()->default(null);
            $table->float('cost_otoplen_after')->nullable()->default(null);
            $table->float('conservation')->nullable()->default(null);
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
        Schema::dropIfExists('project_data_models');
    }
}
