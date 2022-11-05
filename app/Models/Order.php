<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'user_id','total_price','quantity','details','city','number_order','created_at','recieve', 'updated_at'
    ];
    public function user() {

        return $this->belongsTo('App\User','user_id');
    }


    public function scopeSelection($query)
    {
        return $query->select('id','user_id','total_price','city','recieve', 'number_order','quantity','details','created_at', 'updated_at');
    }



    public function getActive()
    {
        return $this->recieve == 1 ? 'تم الاستلام' : ' لم يتم الاستلام';

    }





}
