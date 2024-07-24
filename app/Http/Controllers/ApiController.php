<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photos;
use App\Models\user;

class ApiController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    //subir una foto por API y guardarla en la BD

    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photo_details_id' => 'required|integer',
        ]);

        $photo = $request->file('photo');
        $photoDetailsId = $request->input('photo_details_id');

        //generar un nombre único para el archivo
        $id_usuario =auth()->id();
        $fileName = "{$id_usuario}_" . time() . '.' . $photo->getClientOriginalExtension();

        //mover la ruta del archivo en la base de datos
        $photo->move(public_path('selected_Product_Images'), $fileName);

        //Guardar la ruta del archivo en la base de datos
        $photoModel = photos::create([
            'user_id' => $id_usuario,
            'photo_details_id' => $photoDetailsId,
            'url' => 'selected_Product_Images/' . $fileName,
        ]);

        return response()->json(['message' => 'Photo uploaded successfully', 'photo' => $photoModel]);

    }
/* 
    public function photos(Request $request){
        if($request->has('id')){
            $id = $request->input('id');
            $fotos = photos::where('id', $id)->get();
        }
        else{
            $fotos = photos::all();
        }

        return response()->json($fotos);
    } */

    public function users(Request $request){
        if($request->has('id')){
            $id = $request->input('id');
            $productos = photos::where('id', $id)->get();
        }
        else{
            $productos = user::all();
        }

        return response()->json($productos);
    }
}
