<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProjectDataModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDataModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDataModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDataModel query()
 * @mixin \Eloquent
 * @property int $id
 * @property float|null $cost_electro_before
 * @property float|null $cost_electro_after
 * @property float|null $cost_otoplen_before
 * @property float|null $cost_otoplen_after
 * @property float|null $conservation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDataModel whereConservation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDataModel whereCostElectroAfter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDataModel whereCostElectroBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDataModel whereCostOtoplenAfter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDataModel whereCostOtoplenBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDataModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDataModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDataModel whereUpdatedAt($value)
 */
class ProjectDataModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'cost_electro_before',
        'cost_electro_after',
        'cost_otoplen_before',
        'cost_otoplen_after',
        'conservation'
    ];
}
