<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{




    protected $fillable = [
        'photo', 'userName', 'type', 'notification', 'active', 'created_at', 'updated_at'
    ];


    public function scopeSelection($query)
    {
        return $query->select( 'photo', 'userName', 'type', 'notification', 'active', 'created_at', 'updated_at');
    }



}
