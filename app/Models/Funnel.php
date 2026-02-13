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

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(StatusFunnel::class, 'status_funnel_id', 'id');
    }

    public function stages()
    {
        return $this->hasMany(Stage::class, 'funnel_id', 'id');
    }
}
