<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funnel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'funnels';

    protected $fillable = [
        'product_id',
        'manager_id',
        'status_funnel_id',
    ];
}
