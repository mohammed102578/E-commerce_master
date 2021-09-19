<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cart extends Authenticatable
{
    use Notifiable;

    protected $table = 'carts';

    protected $fillable = [
        'session_id','product_id','user_id','color','quantity'
    ];





    public function scopeSelection($query)
    {
        return $query->select('id','session_id','product_id','user_id','color','quantity');
    }



    public  function product(){

        return $this->belongsTo('App\Models\Product', 'product_id','id');
    }


}
