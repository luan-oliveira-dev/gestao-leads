<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'document',
        'email',
        'telephone',
        'type_user_id',
        'address_id',
        'status_user_id',
    ];


    public function type()
    {
        return $this->belongsTo(TypeUser::class, 'type_user_id', 'id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(StatusUser::class, 'status_user_id', 'id');
    }

    public function funnels()
    {
        return $this->hasMany(Funnel::class, 'manager_id', 'id');
    }

    }
