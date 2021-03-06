<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
     public function category(){
    	return $this->hasOne(Category::class ,'category_id');

    }

     public function product_list(){
    	return $this->hasMany(Product::class ,'category_id');
    	
    }
    public function tags(){
    	return $this->belongsToMany(Tag::class,'product_tags','product_id','tag_id')->withTimestamps();
    }
   
}
