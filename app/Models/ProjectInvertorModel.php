<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProjectInvertorModel
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvertorModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvertorModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvertorModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvertorModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvertorModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvertorModel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvertorModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectInvertorModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];
}
