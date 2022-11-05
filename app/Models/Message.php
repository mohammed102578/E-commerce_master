<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $fillable = [
        'vendor_id','vendor_name','title','photo','message','response','type','created_at'];
    public function vendor() {

        return $this->belongsTo('App\Models\message','vendor_id');
    }


    public function scopeSelection($query)
    {
        return $query->select('id',  'vendor_id','vendor_name','title','response','photo','message','type','created_at');
    }




}
