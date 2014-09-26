<?php namespace Blog\Users;

use User;
use Hash;

class Users implements UsersInterface {

    public function addUser($param)
    {
        try{
            $user = new User;
            $user->name= $param['name'];
            $user->surname= $param['surname'];
            $user->email= $param['email'];
            $user->password= Hash::make($param['password']);
            $inserted = $user->save();

            if($inserted){
                return $user;
            }
        }
        catch(Exception $e){
            Log::error($e->getMessage());
        }
        return false;
    }
}