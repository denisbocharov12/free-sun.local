<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CalculatorData
 *
 * @method static \Illuminate\Database\Eloquent\Builder|CalculatorData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalculatorData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalculatorData query()
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CalculatorData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalculatorData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalculatorData whereUpdatedAt($value)
 */
class CalculatorData extends Model
{
    use HasFactory;
}
