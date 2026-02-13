<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'areas';

    protected $fillable = [
        'name',
        'status_area_id',
    ];

    public function products ()
{
    return $this->hasMany(Product::class, 'area_id', 'id');
}

public function status()
{
    return $this->belongsTo(StatusArea::class, 'status_area_id', 'id');
}

}
