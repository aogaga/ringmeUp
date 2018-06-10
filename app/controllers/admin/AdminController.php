<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/25/15
 * Time: 1:21 AM
 */

class AdminController extends BaseController {

        public function index(){

            return View::make('admin.index');
        }





    /**
     * validates the users credentials and log in the user
     */
    public  function login(){

        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('/')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        }else{


            // create our user data for the authentication
            $userdata = array(
                'email' 	=> Input::get('email'),
                'password' 	=> Input::get('password')
            );


            if (Auth::attempt($userdata)) {
                return Redirect::to('dashboard')->with('message', 'You are now logged in!');
            }  else {
                return Redirect::to('/')
                    ->with('message', 'Your username/password combination was incorrect')
                    ->withInput();
            }


        }



    }

    /*
     * logs out the user and clears data stored in session cookies
     */
    public  function logout(){
        Auth::logout();
        return Redirect::to('/');
    }







    public function dashboard(){

        return Redirect::to('/list/all');
    }






}