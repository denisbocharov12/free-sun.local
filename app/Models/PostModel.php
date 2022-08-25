<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * App\Models\PostModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $status
 * @property int|null $category_model_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CategoryModel|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PostImagesModel[] $images
 * @property-read int|null $images_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\PostModelFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereCategoryModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereUpdatedAt($value)
 */
class PostModel extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'status'
    ];
    protected $with = [
        'category'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryModel::class, 'category_model_id');
    }

//    public function images(): MorphMany
//    {
//        return $this->morphMany(PostImagesModel::class, 'imageable');
//    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
