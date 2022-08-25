<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProjectCategoryModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategoryModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategoryModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategoryModel query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ProjectCategoryModelFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategoryModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategoryModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategoryModel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategoryModel whereUpdatedAt($value)
 */
class ProjectCategoryModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];
}
