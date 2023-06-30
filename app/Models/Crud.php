<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
    private static $image, $imageUrl,$crud,$imageName,$directory;
    public static function getImageUrl($request)
    {
        self::$image =$request->file('image');
        self::$imageName =self::$image->getClientOriginalName();
        self::$directory='img/crud/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function newCrud($request)
    {
        self::$crud= new Crud();
        self::$crud->name =$request->name;
        self::$crud->email =$request->email;
        self::$crud->image =self::getImageUrl($request);
        self::$crud->save();
    }
    public static function updateCrud($request ,$id){
        self::$crud=Crud::find($id);
        if($request->file('image')){
            if(file_exists(self::$crud->image)){
                unlink(self::$crud->image);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else{
            self::$imageUrl=self::$crud->image;
        }
        self::$crud->name =$request->name;
        self::$crud->email =$request->email;
        self::$crud->image =self::$imageUrl;
        self::$crud->save();
    }
    public static function deleteData($request)
    {
        self::$crud= Crud::find($request->data_id);
        if(file_exists(self::$crud->image)){
            unlink(self::$crud->image);
        }

        self::$crud->delete();
    }
}
