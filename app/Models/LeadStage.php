<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadStage extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'lead_stage';

    protected $fillable = [
        'stage_id',
        'lead_id',
        'seller_id',
    ];
}
