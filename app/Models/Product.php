<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'value',
        'area_id',
        'category_id',
        'information_id',
        'status_product_id',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function information()
    {
        return $this->belongsTo(Information::class, 'information_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(StatusProduct::class, 'status_product_id', 'id');
    }

    public function funnel()
    {
        return $this->hasOne(Funnel::class, 'product_id', 'id');
    }
}
