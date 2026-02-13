<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusFunnel extends Model
{
    use HasFactory;

    protected $table = 'status_funnels';

    protected $fillable = [
        'name'
    ];
}
