<?php

namespace App\Http\Controllers;

use App\Login;
use App\Register;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Routing\ResponseFactory;

class LoginController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
    * FRONT END
    * Fetch views of the login
    * @return Illuminate\Http\Response
    */
    public function views()
    {
        return view('login',['error' => [] ]);
    }

    /**
    * BACK END
    * Return the list of users
    * @return Illuminate\Http\Response
    */
    public function index()
    {
         $logins = Login::all();

         return $this->successResponse($logins);
    }

    /**
    * Create one new user
    * @return Illuminate\Http\Response
    */
    public function store(Request $request)
    {
       $rules = [
         'username' =>'required|max:255',
         'password' => 'required|min:8',
       ];

      $this->validate($request, $rules);

      /**
      * Validate that user is already registered
      */
      $user_validate = Register::all();

      $check1 = 'a';
      $check2 = 'b';
      foreach ($user_validate as $user) {
          if($user->username == $request->username ){
             $check1 = $user->id;
          }
      }

      foreach ($user_validate as $users) {
          if($users->password == $request->password ){
             $check2 = $users->id;
          }
      }

      if ($check1 == $check2) {

         $login = Login::create($request->all());


         return $this->successResponse($login, Response::HTTP_CREATED);

      } else {

        $error = $this->errorResponse('Invalid Username or Password',
                    Response::HTTP_UNPROCESSABLE_ENTITY);

        //$error = 'Invalid Username or Password';

        // TRying to return response with view to work on APIGATEWAY
        return view('login', ['error' => $error]);

        return $error;
      }
    }

    /**
    * Obtains and show one user
    * @return Illuminate\Http\Response
    */
    public function show($login)
    {
       $login = Login::findOrFail($login);

       return $this->successResponse($login);
    }

    /**
    * Update an existing user
    * @return Illuminate\Http\Response
    */
    public function update(Request $request, $login)
    {
       $rules = [
         'username' =>'max:255',
         //'email' => 'email' .$login,
         'password' => 'min:8',
       ];

      $this->validate($request, $rules);

      $login = Login::findOrFail($login);

      $login->fill($request->all());

      if ($login->isClean())
      {
         return $this->errorResponse('At least one value must change',
                      Response::HTTP_UNPROCESSABLE_ENTITY);
      }

       $login->save();

       return $this->successResponse($login);
    }

    /**
    * Remove an existing user
    * @return Illuminate\Http\Response
    */
    public function destroy($login)
    {
       $login = Login::findOrFail($login);

       $login->delete();

       return $this->successResponse($login);
    }
}
