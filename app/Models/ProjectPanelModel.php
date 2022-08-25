<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProjectPanelModel
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPanelModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPanelModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPanelModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPanelModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPanelModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPanelModel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPanelModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectPanelModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];
}
