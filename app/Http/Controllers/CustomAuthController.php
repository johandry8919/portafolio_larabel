<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Sidebar_edit;

class CustomAuthController extends Controller
{
    public function index()
    {

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
                
            ];
        }
        return view('auth.login', ['descricion' => $date], ['usuario' => Auth::check()]);
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
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
                
            ];redirect("welcome")->withSuccess('You have signed-in');
        }

        return view('auth.registration' , ['descricion' => $date] , ['usuario' => Auth::check()]);
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'apellido' => $data['apellido'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('login');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
