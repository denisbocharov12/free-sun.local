<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ProjectCategoryModel;
use App\Models\ProjectDataModel;
use App\Models\ProjectModelsModel;
use App\Models\ProjectInvertorModel;
use App\Models\ProjectPanelModel;

class CreateProjectModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_models', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('slug')->nullable()->default(null);
            $table->text('mission')->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->enum('status', ['active','inactive'])->default('active');
            $table->bigInteger('year')->nullable()->default(null);
            $table->json('map')->nullable()->default(null);
            $table->foreignIdFor(ProjectDataModel::class)->nullable()->default(null);
            $table->foreignIdFor(ProjectCategoryModel::class)->nullable()->default(null);
            $table->foreignIdFor(ProjectModelsModel::class)->nullable()->default(null);
            $table->foreignIdFor(ProjectInvertorModel::class)->nullable()->default(null);
            $table->foreignIdFor(ProjectPanelModel::class)->nullable()->default(null);
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
        Schema::dropIfExists('project_models');
    }
}
