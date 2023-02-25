
@extends('components.layouts.app')
@section('content')

<style>

.social{
  transition: background 200ms ease-in-out 0s;
  -webkit-transition: background 200ms ease-in-out 0s;
  -moz-transition: background 200ms ease-in-out 0s;
  -o-transition: background 200ms ease-in-out 0s;
  -ms-transition: background 200ms ease-in-out 0s;
  
  margin-top: 12px;
  -webkit-border-top-left-radius:1px;
  -moz-border-radius-topleft:1px;
  border-top-left-radius:1px;
  -webkit-border-top-right-radius:1px;
  -moz-border-radius-topright:1px;
  border-top-right-radius:1px;
  -webkit-border-bottom-right-radius:1px;
  -moz-border-radius-bottomright:1px;
  border-bottom-right-radius:1px;
  -webkit-border-bottom-left-radius:1px;
  -moz-border-radius-bottomleft:1px;
  border-bottom-left-radius:1px;
  text-indent:0;
  display:block;
  color:#ffffff;
  height:50px;
  line-height:50px;
  width: 100%;
  text-decoration:none;
  text-align:center;
}

.gplogin {  
  background-color:#dd4c39; 
}
.gplogin:hover {
  background-color:#f06e60;
}
.gplogin:active {
  position:relative;
  top:1px;
}


.right a {
  position: relative;
  color: #b6b6b6;
  text-decoration: none;
  font-family: 'Arimo', sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: .9em;
  float: right;
  margin-top:5px;
}
.headit { 
  position: relative; 
  top: -10px;
}
.headit h4{
  color: #474646;
}
.bts a:hover{
  text-decoration: none;
  color: white;
}
.bts a:active{
  color: white;
  text-decoration: none;
}
.bts a:focus{
  text-decoration: none;
  color: white;
}
.headit a {
text-decoration: none;
}

.fa.fa-check-square {
padding-right: 19px;
}

</style>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <h3 class="card-header text-center">Inicia seccion</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>

                                        <a href="{{route('register-user')}}">Registrate para ver mas contenido</a>
                                        
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Acceso</button>
                            </div>

                            <a href="{{route('register_google')}}" class="gplogin social"><i class="p-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                              </svg></i><span>Incia seccion con Google</span></a>      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection