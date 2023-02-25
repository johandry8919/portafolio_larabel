@php
    //dd();
@endphp
<div class="sidebar animate__animated animate__backInDown">
    <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
        <img class="mx-auto d-block w-75  img-fluid rounded-circle mb-4 p-3" src="/img/johandry.png" alt="Image">
        <h1 class="font-weight-bold">{{$descricion['edit_nombre'] ?? 'nombre vacio'}}</h1>
        <p class="mb-4">
            {{$descricion['edit_decricion'] ?? 'si defenicio'}}
        </p>
        <div class="d-flex justify-content-center mb-5">
            <a class="btn btn-outline-info mr-2" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-info mr-2" href="{{$descricion ['facebook'] ?? 'si defenicio'}}"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-info mr-2" href="{{$descricion['github'] ?? 'si defenicio'}}"><i class="fab fa-github"></i></a>
           
        </div>
        <a href="" class="btn btn-lg btn-block btn-info mt-auto">Contratame</a>
    </div>
    <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
        <i class="fas fa-2x fa-angle-double-right text-info"></i>
    </div>
</div>