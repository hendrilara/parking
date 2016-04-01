<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Input;
use Auth;
use DB;
use App\Social;
use Session;
use App\SocialAccount;

class AuthController extends Controller
{

   
   
    public function userAll()
    {
        $user = User::with('social')->get();

        return response()->json(compact('user'));
    }


    public function getUser(Request $request,$id)
    {
        $userprofil = User::with('social')->findOrFail($id);

        if (!$userprofil) {

            return response()->json([
                'status' => false,
                'data' => 'not found',
                ], 404);
        }
        else
        {
            return response()->json([
                'status' => true,
                'data' => $userprofil
                ], 200);
        }
    }
    /**
     * [register description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function registerOrLogin(Request $request)
    {     
           // check user 
          $check_user_query = Social::where('facebook_id', '=', $request->input('facebook_id'))->first();

          if (!isset($check_user_query))
          {
            //new user 
             $user_register = new Social;

             $user_register->username = $request->input('username');
             $user_register->email    = $request->input('email');
             $user_register->avatar   = $request->input('avatar');
             $user_register->facebook_token = $request->input('facebook_token');
             $user_register->facebook_id = $request->input('facebook_id');
             
             $register_account = $user_register->save();

             if (!$register_account) {
               
               return response()->json([

                    'messages' => 'errors register',
                    'status_code' => 404,

                ], 404)->header('Content-Type', 'application/json');
             }

             else
             {

                return response()->json([

                    'messages' => 'success register',
                    'status_code' => 200,
                    'data'  => $register_account

                ], 200)->header('Content-Type', 'application/json');
           }
            
        }
    }

    // /**
    //  * [registerOrLogin description]
    //  * @param  Request $request [description]
    //  * @return [type]           [description]
    //  */
    
    // public function registerOrLogin(Request $request)
    // {   

    //   try{


    //       //  $email = Session::get('id');
    //       //  $data  = User::FilterData($email)->get()->toArray();
    //       //  $social_account = User::('provider', $provider)->where('provider_user_id')->first();
    //       //  $provider = Input::get('provider_id');

    //       // $social_auth = DB::table('social_account')->where('provider_id', $provider)->pluck('user_id');


    //       if ($social_auth) {
            
    //          return response($social_auth);
              
    //           }
    //           else
    //           {
    //           $social_account = new SocialAccount;
    //           $social_account->provider_id    = $request->input('provider_id');
    //           $social_account->provider_token = $request->input('provider_token');
        
    //           $user = new User;
    //           $user->name   = $request->input('name');
    //           $user->email  = $request->input('email');
    //           $user->avatar = $request->input('avatar');
    //           $user->save();

    //           $register = $user->social()->save($social_account);

    //           $token = JWTAuth::fromUser($register);

    //            }

    //             return response()->json(compact('token'));
                
    //         }catch ( \Illuminate\Database\QueryException $e) {
          
    //           var_dump($e->errorInfo );
    //     }
           
    // }


    // private function findOrCreateUser($provider, $socialUser)
    // {
    //         $user = User::where('email', $socialUser->email)->first();

    //         if ($user){
    //             return $user;
    //         }

    //           $social_account = new SocialAccount;
    //           $social_account->provider_id    = $request->input('provider_id');
    //           $social_account->provider_token = $request->input('provider_token');
        
    //           $user = new User;
    //           $user->name   = $request->input('name');
    //           $user->email  = $request->input('email');
    //           $user->avatar = $request->input('avatar');
    //           $user->save();

    //           $register = $user->social()->save($social_account);

    //           $token = JWTAuth::fromUser($register);
     
    // }


    //     //   $credentials = array(

    //     //           'email' => Input::get('email'),
    //     //           'name'  => Input::get('name')
    //     //     );

    //     //   if (!$token = JWTAuth::attempt($credentials))
    //     //   {
    //     //     return response()->json(['errors' => 'invalid_credentials'], 401);
    //     //   }
    //     //   else
    //     //   {

    //     //   $social_account = new SocialAccount;
    //     //   $social_account->provider_id    = $request->input('provider_id');
    //     //   $social_account->provider_token = $request->input('provider_token');
    
    //     //   $user = new User;
    //     //   $user->name   = $request->input('name');
    //     //   $user->email  = $request->input('email');
    //     //   $user->avatar = $request->input('avatar');
    //     //   $user->save();

    //     //   $register = $user->social()->save($social_account);

    //     //   $token = JWTAuth::fromUser($register);
    
    //     // } 

    //     //     return response()->json(compact('token'));
    //     //     
    //     // // dd($data);
    //     //   if (isset($data['email'])) {
          
    //     //        $data =  Input::only('email');

    //     //        // return $data;
            
    //     //       // if ( $token = JWTAuth::user($data)) {
    //     //       //   # code...
    //     //       //   return response()->json(compact('token'));
                
       
    

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //         try{

    //             if (! $token = JWTAuth::attempt($credentials)) {
                     
    //                  return response()->json(['errors' => 'invalid_credentials'], 401);
    //             }
    //         }catch (JWTException $e){

    //             return response()->json(['errors' => 'could_not_create_token'], 500);
    //         }

    //         return response()->json(compact('token'));
    // }

    // /**
    //  * [logout]
    //  */

    // public function logout(Request $request)
    // {
    //     $this->validate($request, [
    //         'token' => 'required'
    //         ]);
    //     JWTAuth::invalidate($request->input('token'));
    // }

    // /**
    //  * [get user auth]
    //  */

    // public function getAuthenticatedUser()
    // {
    //     try {
    //         if (! $user = JWTAuth::parseToken()->authenticate()) {
    //             return response()->json(['user_not_found'], 404);
    //         }
    //     } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
    //         return response()->json(['token_expired'], $e->getStatusCode());
    //     } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
    //         return response()->json(['token_invalid'], $e->getStatusCode());
    //     } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
    //         return response()->json(['token_absent'], $e->getStatusCode());
    //     }

    //     return response()->json(compact('user'));
    // }


    // public function test(Request $request){

       
    // }

}
