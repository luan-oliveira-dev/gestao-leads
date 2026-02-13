<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusLead extends Model
{
    use HasFactory;

    protected $table = 'status_leads';

    protected $fillable = [
        'name'
    ];
}
