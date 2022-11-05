<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vendor extends Authenticatable
{
    use Notifiable;

    protected $table = 'vendors';

    protected $fillable = [
        'latitude', 'longitude', 'name','city', 'mobile', 'password', 'address', 'email', 'logo', 'active', 'created_at', 'updated_at'
    ];



    public function scopeActive($query)
    {

        return $query->where('active', 1);
    }

    public function getLogoAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";

    }


    public function scopeSelection($query)
    {
        return $query->select('id','latitude','longitude','city','password', 'active', 'name', 'address', 'email', 'logo', 'mobile');
    }



    public function getActive()
    {
        return $this->active == 1 ? 'مفعل' : 'غير مفعل';

    }


    public function setPasswordAttribute($password)
    {
        if (!empty($password)) {
            $this->attributes['password'] = bcrypt($password);
        }
    }


    public  function product(){
        return $this -> hasMany('App/Models/Product',' vendor_id','id');
    }



    public  function message(){
        return $this -> hasMany('App/Models/Message',' vendor_id','id');
    }





}
