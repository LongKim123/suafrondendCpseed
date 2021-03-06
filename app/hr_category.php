<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hr_category extends Model
{
   protected $table='h_r__categories';
   public function hr(){
    	return $this->hasMany(hr::class,'category_hr_id');
    }
}
