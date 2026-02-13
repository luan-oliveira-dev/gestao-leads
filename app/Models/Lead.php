<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'leads';

    protected $fillable = [
        'name',
        'telephone',
        'status_lead_id',
    ];
}
