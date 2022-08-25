<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'comment',
        'email',
        'phone',
        'status'
    ];
}
