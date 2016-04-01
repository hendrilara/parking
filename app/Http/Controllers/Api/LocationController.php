<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ParkingHours;
use App\Capacity;
use App\Location;
use App\Image;
use DB;

class LocationController extends Controller
{

    public function searchNearby(Request $request)
    {
        // api searchNearby
    }

    
    public function nearby(Request $request)
    {

        $latitude  = $request->input('lat');
        $longitude = $request->input('lng');

        // destince/radius 50 kilometers
        $nearby_locations = Location::with('image')->within(10, 'kilometers', $latitude, $longitude)
                                    ->get(); 

         if (!$nearby_locations) {
               
               return response()->json([

                    'message' => 'nearby location not found',
                    'status_code' => 404,

                ], 404)->header('Content-Type', 'application/json');
           }
           else
           {
            return response()->json([

                    'message' => 'success',
                    'status_code' => 200,
                    'data' => $nearby_locations

                ], 200)->header('Content-Type', 'application/json');
           }
    }

     // version query db nearby location 
    
    public function findNearbyLocation(Request $request)
    {
        
        $nearby_locations = DB::table('location')
            ->join('image', 'location.id', '=', 'location.image_id')
            ->select('location.name', 'location.lat', 'location.lng', 'location.city', 'location.description', 'location.price', 'image.picture', DB::raw(sprintf(
                '(6371 * acos(cos(radians(%1$.7f)) * cos(radians(lat)) * cos(radians(lng) - radians(%2$.7f)) + sin(radians(%1$.7f)) * sin(radians(lat)))) AS distance',
                $request->input('lat'),
                $request->input('lng')
            )))
        ->having('distance', '<', 5) //<- distance/radius 5 kilometer
        ->orderBy('distance', 'asc')
        ->get();

        if (!$nearby_locations) {
            
            return response()->json([

                'messages' => 'nearby location not found',
                'status_code' => 404

            ], 404)->header('Content-Type', 'application/json');
        }
        else
        {
            return response()->json([

                'messages' => 'success',
                'status_code' => 200,
                'data'  => $nearby_locations

            ], 200)->header('Content-Type', 'application/json');
        }
    }

    // test gagal
    public function location(Request $request)
     {  
        
        $nearby = Location::with('image')->get();

        foreach($nearby as $nearby_location) {

            if ($nearby_location == null)continue; {
                
                $lat = $nearby_location->lat;

                $lng = $nearby_location->lng;

               $locations = Location::with('image')->within(3, 'kilometers', $lat, $lng)
                                    ->get();    

               if(!$locations) {
                  
                    return response()->json([
                            'messages' => 'errors',
                            'status_code' => 404
                        ], 404);
               }
               else
               {
                    return response()->json([
                            'messages' => 'success',
                            'status_code' => 200,
                            'data' => $locations
                    ], 200)->header('Content-Type', 'application/json');
               }
            }
       
        }

    }

    public function showLocation($location)
    {
        
        $show_location = Location::with('image', 'capacity', 'parking')
                        ->find($location);

        if (!$show_location) {
                
            return response()->json([

                    'message' => 'data not found',
                    'status_code' => 404,

        ], 404)->header('Content-Type', 'application/json');

        }
        else
        {
            return response()->json([

                    'message' => 'succes',
                    'status_code' => 200,
                    'data'  => $show_location

           ],200)->header('Content-Type', 'application/json');
        }
    }
}