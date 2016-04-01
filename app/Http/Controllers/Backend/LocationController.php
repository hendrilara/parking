<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use File;
use Input;
use App\Image;
use App\Location;
use App\Capacity;
use App\ParkingHours;
class LocationController extends Controller
{
   public function index()
   {
      $location = Location::with('parking', 'image', 'capacity')->get();
       return view('location.index', compact('location'));
   }

   public function create()
   {
      return view('location.create');
   }

   /**
    * [store description]
    * @param  Request $request [description]
    * @return [type]           [description]
    */
   public function store(Request $request)
   {

    $this->validate($request, [

          'name' => 'required',
          'city' => 'required',
          'price' => 'required',
          'address' => 'required',
          'description' => 'required',
          'lng' => 'required',
          'lng' => 'required',
          'open_parking' => 'required',
          'close_parking' => 'required'
      ]);

    $location = New Location();

    $location->name         = $request->input('name');
    $location->city         = $request->input('city');
    $location->price        = $request->input('price');
    $location->address      = $request->input('address');
    $location->description  = $request->input('description');
    $location->lng          = $request->input('lng');
    $location->lat          = $request->input('lat');

    $picture = Input::file('picture');
    $destinationPath = 'image';

    $extension = rand(11111, 99999) . '.' . $picture->getClientOriginalName();

    //$fileName = rand(11111, 99999). '.' . $extension;
    $upload = $picture->move($destinationPath, $extension);

    $image = New Image();
    //$image->name    = $request->input('name');
    $image->picture = url($upload);
    $image->save();

    $parkingHours = New ParkingHours();

    $parkingHours->close_parking = $request->input('close_parking');
    $parkingHours->open_parking  = $request->input('open_parking');
    $parkingHours->save();

    // $capacity = New Capacity();
    // $capacity->empty    = $request->input('empty');
    // $capacity->avalible = $request->input('avalible');
    // $capacity->save();
     $image->location()->save($location) && $parkingHours->location()->save($location);

      \Flash::success($request->get('name') . ' location saved.');
      return redirect('location');

   }

   public function show($id)
   {
      $location = Location::find($id);

      return view('location.show', compact('location'));

   }


   public function edit(Request $request, $id)
   {
      $location = Location::with('parking', 'image')->find($id);

      return view('location.edit')->with('location', $location);
   }


   /**
    * [update description]
    * @param  Request $request  [description]
    * @param  [type]  $location [description]
    * @return [type]            [description]
    */
   public function update(Request $request, $location)
   {
        $this->validate($request, [

          'name' => 'required',
          'city' => 'required',
          'price' => 'required',
          'address' => 'required',
          'description' => 'required',
          'lng' => 'required',
          'lng' => 'required',
          'open_parking' => 'required',
          'close_parking' => 'required'
        ]);

        $update = Location::find($location);
        $update->name        = $request->input('name');
        $update->city        = $request->input('city');
        $update->price       = $request->input('price');
        $update->address     = $request->input('address');
        $update->description = $request->input('description');
        $update->lng   = $request->input('lng');
        $update->lat    = $request->input('lat');

        $parking_hours = ParkingHours::find($location);
        $parking_hours->open_parking = $request->input('open_parking');
        $parking_hours->close_parking = $request->input('close_parking');
        $parking_hours->save();

        // $capacity = Capacity::find($location);
        // $capacity->empty = $request->input('empty');

        // $capacity->save();
       $parking_hours->location()->save($update);

        \Flash::success($request->get('name') . 'update saved.');
        return redirect('location');
   }

   public function destroy($id)
   {
      $location = Location::with('parking', 'image', 'capacity')->find($id);

      $location->delete();

      \Flash::success('location delete.');
      return redirect('location');
   }
}
