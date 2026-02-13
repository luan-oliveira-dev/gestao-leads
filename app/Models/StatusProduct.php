<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusProduct extends Model
{
    use HasFactory;

    protected $table = 'status_products';

    protected $fillable = [
        'name'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'status_product_id', 'id');
    }
}
