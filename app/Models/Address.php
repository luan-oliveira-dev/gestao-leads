<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'addresses';

    protected $fillable = [
        'public_space',
        'number',
        'district',
        'city',
        'zip_code',
        'uf_id',
    ];

    public function uf()
    {
        return $this->belongsTo(Uf::class, 'uf_id', 'id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'address_id', 'id');
    }
}
