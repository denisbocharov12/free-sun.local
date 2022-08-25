<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProjectImagesModel
 *
 * @property int $id
 * @property string $path
 * @property string $imageable_type
 * @property int $imageable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectImagesModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectImagesModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectImagesModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectImagesModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectImagesModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectImagesModel whereImageableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectImagesModel whereImageableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectImagesModel wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectImagesModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectImagesModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'imageable_id',
        'imagiable_type'
    ];
}
