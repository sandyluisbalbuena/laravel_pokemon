<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function signIn(Request $data){
        // dd($data);

        $user = new User();
        $user->name = $data['username'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        if($user->save()){
            $response = [
                'success' => true,
                'message' => 'Data inserted successfully.'
            ];

            return response()->json($response);
        }

    }
    
    function signInCheck(Request $data){

        // $email = $data['email'];
        $username = $data['username'];

        // $email = User::where('email', $email)->first();
        $username = User::where('name', $username)->first();


        // dd($email, $username);


        // if($email || $username){
        if($username){
            $response = [
                'success' => false,
                'message' => 'User or email already exist.'
            ];

            return response()->json($response);
        }
        else{
            $response = [
                'success' => true,
                'message' => 'Data is unique.'
            ];

            return response()->json($response);
        }
    }

    function logIn(Request $data){
        dd($data);
    }
}
