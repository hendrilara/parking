<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkingHours extends Model
{
   protected $table = 'parking_hours';

   protected $fillable = ['close_parking', 'open_parking'];

   protected $hidden = ['close_parking', 'created_at', 'updated_at'];

   public function location()
   {
   		return $this->hasMany('App\Location', 'parking_hours_id');
   }
}
