<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PostImagesModel
 *
 * @property int $id
 * @property string $path
 * @property string $imageable_type
 * @property int $imageable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PostImagesModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostImagesModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostImagesModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostImagesModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostImagesModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostImagesModel whereImageableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostImagesModel whereImageableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostImagesModel wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostImagesModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PostImagesModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'imageable_id',
        'imagiable_type'
    ];
}
