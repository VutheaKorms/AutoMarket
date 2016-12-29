<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{
    public function index()
    {
        try{
            $statusCode = 200;
            $response = [
                'photos'  => []
            ];

            $photos = Photo::all()->take(9);

            foreach($photos as $photo){

                $response['photos'][] = [
                    'id' => $photo->id,
                    'user_id' => $photo->user_id,
                    'url' => $photo->url,
                    'title' => $photo->title,
                    'description' => $photo->description,
                    'category' => $photo->category,
                ];
            }

        }catch (Exception $e){
            $statusCode = 400;
        }finally{
            return Response::json($response, $statusCode);
        }

    }

    public function show($id)
    {
        try{
            $photo = Photo::find($id);
            $statusCode = 200;
            $response = [ "photo" => [
                'id' => (int) $id,
                'user_id' => (int) $photo->user_id,
                'title' => $photo->title,
                'url' => $photo->url,
                'category' => (int) $photo->category,
                'description' => $photo->description
            ]];

        }catch(Exception $e){
            $response = [
                "error" => "File doesn`t exists"
            ];
            $statusCode = 404;
        }finally{
            return Response::json($response, $statusCode);
        }

    }
}
