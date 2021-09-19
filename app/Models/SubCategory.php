<?php

namespace App\Models;

use App\Observers\SubCategoryObserver;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;
class SubCategory extends Model
{
    protected $table = 'sub_category';

    protected $fillable = [
         'name', 'photo', 'active', 'main_category_id','created_at', 'updated_at'
    ];

    protected static function boot()
    {
        parent::boot();
       // SubCategory::observe(SubCategoryObserver::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSelection($query)
    {

        return $query->select('id','name', 'main_category_id', 'photo', 'active');
    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";

    }

    public function getActive()
    {
        return $this->active == 1 ? 'مفعل' : 'غير مفعل';

    }


    public function maincategory()
    {

        return $this->belongsTo('App\Models\MainCategory', 'main_category_id','id');
    }




    public  function product(){
        return $this -> hasMany('App/Models/Product','category_id','id');
    }

}
