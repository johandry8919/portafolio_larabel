<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Sidebar_edit;
use Illuminate\Http\Request;

class ConAppmicontrollert extends Controller
{
    public function index(){

            $date = Sidebar_edit::all();
            foreach( $date as $descricion){
                $date=[
                "imagen" => $descricion->imagen,
                "edit_nombre" => $descricion->edit_nombre,
                "edit_decricion" => $descricion->edit_decricion,
                "facebook" => $descricion->facebook,
                "github" => $descricion->github,
                "LinkedIn" => $descricion->LinkedIn,
                "created_at" => $descricion->created_at,
                "updated_at" => $descricion->iupdated_at,
                "usuario" => Auth::user() ?? '',
                ];
            }

           

            return view('welcome' ,['descricion' => $date], ['usuario' => Auth::check()]);

    }


    public function about () {
        if(Auth::check()){
            $date = Sidebar_edit::all();
            foreach( $date as $descricion){
                $date=[
                "id" => 8,
                "imagen" => $descricion->imagen,
                "edit_nombre" => $descricion->edit_nombre,
                "edit_decricion" => $descricion->edit_decricion,
                "facebook" => $descricion->facebook,
                "github" => $descricion->github,
                "LinkedIn" => $descricion->LinkedIn,
                "created_at" => $descricion->created_at,
                "updated_at" => $descricion->iupdated_at,
                "usuario" => Auth::check(),
                    
                ];
            }
            return view('components.about' , ['descricion' => $date], ['usuario' => Auth::check()]);
        }
    
        return redirect("login")->withSuccess('You are not allowed to access');
}

}
