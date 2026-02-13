<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusArea extends Model
{
    use HasFactory;

    protected $table = 'status_areas';

    protected $fillable = [
        'name'
    ];

    public function areas()
    {
        return $this->hasMany(Area::class, 'status_area _id', 'id');
    }
}
