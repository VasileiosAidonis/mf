<?php

namespace App\Http\Controllers;

use App\Register;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\LoginController;
use Illuminate\Http\RedirectResponse;
use Laravel\Lumen\Http\Redirector;

class RegisterController extends Controller
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
    * Fetch view of the register
    * @return Illuminate\Http\Response
    */
    public function views()
    {
        return view('register');
    }

    /**
    * Return the list of users
    * @return Illuminate\Http\Response
    */
    public function index()
    {
         $registers = Register::all();

         return $this->successResponse($registers);
    }

    /**
    * Create a new user
    * @return Illuminate\Http\Response
    */
    public function create()
    {
        return view('register');
    }

    /**
    * Create one new user
    * @return Illuminate\Http\Response
    */
    public function store(Request $request)
    {
       $rules = [
         'username' =>'required|max:255|unique:registers,username',
         'email' => 'required|email|unique:registers,email',
         'password' => 'required|min:8',
         'conf_password' => 'required|min:8',
       ];

       $this->validate($request, $rules);

       if ( $request->password != $request->conf_password)
       {
         return $this->errorResponse('Passwords do not match',
                      Response::HTTP_UNPROCESSABLE_ENTITY);
       } else {

         $register = Register::create($request->all());

        // RETURN THE LOGIN PAGE HERE
        //return redirect()->route('logins');

        //return $this->successResponse($register, Response::HTTP_CREATED);
       }
    }

    /**
    * Obtains and show one user
    * @return Illuminate\Http\Response
    */
    public function show($register)
    {
       $register = Register::findOrFail($register);

       return $this->successResponse($register);
    }

    /**
    * Update an existing user
    * @return Illuminate\Http\Response
    */
    public function update(Request $request, $register)
    {
       $rules = [
         'username' =>'max:255|unique:registers,username',
         'email' => 'email|unique:registers,email' .$register,
         'password' => 'min:8',
         'conf_password' => 'min:8',
       ];

      $this->validate($request, $rules);

      $register = Register::findOrFail($register);

      $register->fill($request->all());

      if ($register->isClean())
      {
         return $this->errorResponse('At least one value must change',
                      Response::HTTP_UNPROCESSABLE_ENTITY);
      }

       $register->save();

       return $this->successResponse($register);
    }

    /**
    * Remove an existing user
    * @return Illuminate\Http\Response
    */
    public function destroy($register)
    {
       $register = Register::findOrFail($register);

       $register->delete();

       return $this->successResponse($register);
    }
}
