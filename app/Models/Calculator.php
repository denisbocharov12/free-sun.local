<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Calculator
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Calculator newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calculator newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calculator query()
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Calculator whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calculator whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calculator whereUpdatedAt($value)
 */
class Calculator extends Model
{
    use HasFactory;

    protected $fillable = [
        'monthly_electricity',
        'heated_area',
        'required_power',
        'required_qty',
        'required_area_roof',
        'required_area_earth',
        'offer_email',
        'offer_phone',
        'offer_name_surname',
        'offer_comment'
    ];
}
