<?php

use Blog\Users;

class UserController extends BaseController {
    private $users;

    function __construct(Users $users)
    {
        $this->users = $users;
    }

    public function signup()
    {
        return View::make('user.signup');
    }

    public function userCreate()
    {
        if(Input::get('name') AND Input::get('surname') AND Input::get('email') AND Input::get('password')){
            try{
                $values["name"] = Input::get('name');
                $values["surname"] = Input::get('surname');
                $values["email"] = Input::get('email');
                $values["password"] = Input::get('password');
                $inserted = $this->users->addUser($values);
            }
            catch(Exception $e){
                Log::error($e->getMessage());
                return Redirect::route('signup')->with(['error'=> 'Beklenmedik bir hata oluştu, kayıt yapılamadı.'])->withInput();
            }

            if($inserted){
                Auth::loginUsingId($inserted->id);
                return Redirect::route('home')->with(['message'=>'Başarıyla kaydedildi.']);
            }
            else{
                return Redirect::route('signup')->with(['error'=>'DB hata oluştu.'])->withInput();
            }
        }
        else {

            return Redirect::route('signup')->with(['error'=>'Boş alanları doldurunuz'])->withInput();
        }
    }

    public function login()
    {
        $user = Auth::user();
        if(!empty($user->id)){
            return Redirect::route('home');
        }
        return View::make('user.login');
    }

    public function postLogin()
    {
        if(Input::get('email') AND Input::get('password')){

            $email = Input::get( 'email' );
            $password = Input::get( 'password' );

            if (Auth::attempt(array('email' => $email, 'password' => $password))){
                return Redirect::route('home');
            }
            else{
                return Redirect::route('login')->with(['error'=>'Hatalı Giriş Yaptınız.'])->withInput();
            }
        }
        else {
            return Redirect::route('login')->with(['error'=>'Boş alanları doldurunuz'])->withInput();
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::route('home');
    }

} 