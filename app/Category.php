<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    
    public function categoryChildrent(){
    	return $this->hasMany(Category::class ,'parent_id');
    }

     public function product(){
    	return $this->hasMany(Product::class,'category_id');
    }
    public function product1(){
    	return $this->hasMany(Product::class,'category_id');
    }
    
    

}
