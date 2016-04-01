<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Input;
use Hash;
class UserController extends Controller
{
   
     
   public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('role:superadmin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $breadcrumb = 'Home'
        $user = User::paginate('4');

        return view('manage_user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage_user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $picture = Input::file('avatar');

        $destinationPath = 'img';

        $extension = rand(11111, 99999) . '.' . $picture->getClientOriginalName();

        //$fileName = rand(11111, 99999). '.' . $extension;
        $upload = $picture->move($destinationPath, $extension);

        $user_create = New User;
        $user_create->name = $request->input('name');
        $user_create->email = $request->input('email');
        $user_create->role = $request->input('role');
        $user_create->avatar = $upload;
        $user_create->password = Hash::make(Input::get('password'));

        $test =$user_create->save();

        // return dd($test);

        return redirect('manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_user = User::findOrFail($id);

        $show = compact('show_user');

        return view('manage_user.show', compact('show'));
    }

    public function edit($id)
    {
        $edit_user = User::find($id);

        return view('manage_user.edit')->with('edit_user', $edit_user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'

            ]);
        $picture = Input::file('avatar');

        $destinationPath = 'img';

        $extension = rand(11111, 99999) . '.' . $picture->getClientOriginalName();

        //$fileName = rand(11111, 99999). '.' . $extension;
        $upload = $picture->move($destinationPath, $extension);

        $update = User::find($id);

        $update->name = $request->input('name');
        $update->email = $request->input('email');
        $update->avatar = $upload;
        $update->role = $request->input('role');
        $update->password = $request->input(Hash::make('password'));

        $update->save();

        return redirect('manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirct('manage');
    }
}
