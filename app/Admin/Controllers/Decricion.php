<?php
namespace App\Admin\Controllers;
use Illuminate\Http\Request;
use App\Models\Sidebar_edit;

class Decricion 
{
     public function index(Request $request){
         $datos = collect($request->all());
          $guarda = (new Sidebar_edit);
          $guarda->imagen = 'img/imagen/yoa.png';
          $guarda->edit_nombre = $datos['nombre'];
          $guarda->edit_decricion = $datos['sideDescricion'];
          $guarda->facebook = $datos['facebook'];
          $guarda->github = $datos['github'];
          $guarda->LinkedIn = $datos['LinkedIn'];
          $guarda->save();

          $result = Sidebar_edit::get();
          
         
          if(empty($result)){
               $guarda->save();
               return redirect("Admin")->withSuccess('You are not allowed to access');

          }else{
               Sidebar_edit::where('id' , 8)->update(
               [
                    'imagen' => 'img/imagen/yoa.png',
                    'edit_nombre' => $datos['nombre'],
                    'edit_decricion' => $datos['sideDescricion'],
                    'facebook' => $datos['facebook'],
                    'github' => $datos['github'],
                    'LinkedIn' => $datos['LinkedIn'],
               ]);

               return redirect("Admin")->withSuccess('You are not allowed to access');
          }


        
     }
}
