<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
        try{

            $response = [
                'users' => []
            ];
            $statusCode = 200;
            $users = User::all()->take(9);

            foreach($users as $user){

                $response['users'][] = [
                    'id' => $user->id,
                    'username' => $user->username,
                    'lastname' => $user->lastname,
                    'name' => $user->username
                ];


            }


        }catch (Exception $e){
            $statusCode = 404;
        }finally{
            return Response::json($response, $statusCode);
        }
    }

    public function show($id)
    {
        try{

            $response = [
                'user' => []
            ];
            $statusCode = 200;

            $user = User::find($id);

            $response = [
                'id' => $user->id,
                'name' => $user->name,
                'lastname' => $user->lastname,
                'username' => $user->username
            ];

        }catch (Exception $e){
            $statusCode = 404;
        }finally{
            return Response::json($response, $statusCode);
        }

    }
}
