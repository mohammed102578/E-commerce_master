<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
         'title', 'photo_alt','photo', 'stock','description','price','discount','active', 'category_id','vendor_id','created_at', 'updated_at'
    ];

    protected static function boot()
    {
        parent::boot();

    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSelection($query)
    {

        return $query->select('id','title','photo','stock', 'description','price','vendor_id','category_id','discount','active');
    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";

    }

    public function getActive()
    {
        return $this->active == 1 ? 'مفعل' : 'غير مفعل';

    }


    public function subcategory()
    {

        return $this->belongsTo('App\Models\SubCategory', 'category_id','id');
    }


    public function vendor()
    {

        return $this->belongsTo('App\Models\Vendor', 'vendor_id','id');
    }

    public function cart()
    {
        return $this -> hasMany('App\Models\Cart','product_id','id');

    }

}
