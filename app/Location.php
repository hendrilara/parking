<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Jackpopp\GeoDistance\GeoDistanceTrait;

class Location extends Model
{
    use GeoDistanceTrait;
    
	protected $table ='location';
    protected $fillable = ['address', 'description', 'city', 'name', 'lng', 'lat'];
    protected $hidden = ['created_at', 'updated_at'];

    public function image()
    {
    	return  $this->belongsTo('App\Image', 'image_id');

    
    }

    public function capacity()
    { 
    	return $this->belongsTo('App\Capacity', 'capacity_id'); 
    }

    public function parking()
    {
        return $this->belongsTo('App\ParkingHours', 'parking_hours_id');
    }

//     public function scopeRadius($query, $lat, $lng, $radius = 10, $unit = "km")
//     {

//     $unit = ($unit === "km") ? 6378 : 3963;
//     $lat = (float) $lat;
//     $lng = (float) $lng;
//     $radius = (double) $radius;

//     return $query->having('distance','<=',$radius)
//                 ->select(DB::raw("name, city,  lng, lat,
//                             ($unit * acos(cos(radians($lat))
//                                 * cos(radians(lat))
//                                 * cos(radians($lng) - radians(lng))
//                                 + sin(radians($lat))
//                                 * sin(radians(lat)))) AS distance")
//                 )->orderBy('distance','asc');
//     }

//     public function scopeData($query, $lat, $lng, $radius, $unit = 'km'){
    
//     $unit = ($unit === 'km') ? 6378.10 : 3963.17;

//     return $query->select(DB::raw("*, ($unit * acos(cos(radians(?)) * cos(radians(lat))
//                                      * cos(radians(lng) - radians(?)) + sin(radians(?)) 
//                                      * sin(radians(lat)))) AS distance"))
//         ->having('distance', '<', '?')
//         ->orderBy('distance')

//         ->setBindings(array($lat, $lng, $lat, $radius)); 
// }
  
}