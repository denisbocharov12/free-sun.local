<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * App\Models\ProjectModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string|null $mission
 * @property string|null $description
 * @property string $status
 * @property int|null $project_category_model_id
 * @property int|null $project_data_model_id
 * @property int|null $project_models_model_id
 * @property int|null $project_invertor_model_id
 * @property int|null $project_panel_model_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProjectCategoryModel|null $category
 * @property-read \App\Models\ProjectDataModel|null $data
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProjectImagesModel[] $images
 * @property-read int|null $images_count
 * @property-read \App\Models\ProjectInvertorModel|null $invertor
 * @property-read \App\Models\ProjectModelsModel|null $model
 * @property-read \App\Models\ProjectPanelModel|null $panel
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel whereMission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel whereProjectCategoryModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel whereProjectDataModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel whereProjectInvertorModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel whereProjectModelsModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel whereProjectPanelModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModel whereUpdatedAt($value)
 */
class ProjectModel extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function scopeActive(Builder $query)
    {
        $query->where('status','active');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
        'title',
        'description',
        'status',
        'slug',
        'mission',
        'year',
        'project_category_model_id',
        'project_models_model_id',
        'project_data_model_id',
        'project_invertor_model_id',
        'project_panel_model_id'
    ];

    protected $with = [
        'category',
        'data',
        'model',
        'invertor',
        'panel'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectCategoryModel::class,'project_category_model_id');
    }

    public function data(): BelongsTo
    {
        return $this->belongsTo(ProjectDataModel::class,'project_data_model_id');
    }

    public function model(): BelongsTo
    {
        return $this->belongsTo(ProjectModelsModel::class, 'project_models_model_id');
    }

    public function panel(): BelongsTo
    {
        return $this->belongsTo(ProjectPanelModel::class, 'project_panel_model_id');
    }

    public function invertor(): BelongsTo
    {
        return $this->belongsTo(ProjectInvertorModel::class, 'project_invertor_model_id');
    }

//    public function images(): MorphMany
//    {
//        return $this->morphMany(ProjectImagesModel::class, 'imageable');
//    }
}
