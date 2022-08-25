<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProjectModelsModel
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModelsModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModelsModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModelsModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModelsModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModelsModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModelsModel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectModelsModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectModelsModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];
}
