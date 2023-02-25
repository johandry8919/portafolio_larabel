
@extends('components.layouts.app')
@section('title' , 'Inicio')
@section('content')
        <!-- Carousel Start -->
            @include('components.Carousel_Start')
        <!-- Carousel End -->
        
        @if (!empty($descricion['usuario']))
        <h3  class=" text-center animate__animated animate__bounceInRight"> Bienvenido {{$descricion['usuario']->name}}</h3>
        @endif
        <!-- Inicio de la lista de blogs -->
        <div class="container bg-white pt-5">
          
            
            <div class="row blog-item px-3 pb-5">
                <div class="col-md-5">
                    <img class="img-fluid mb-4 mb-md-0" src="/img/blog-1.jpg" alt="Image">
                </div>
                <div class="col-md-7">
                    
                    <div class="d-flex mb-3">
                        
                        <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Diseño web</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                    </p>
                    <a class="btn btn-link p-0" href="{{URL::asset('img/blog-2.jpg')}}">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="row blog-item px-3 pb-5">
                <div class="col-md-5">
                    <img class="img-fluid mb-4 mb-md-0" src="{{URL::asset('img/blog-2.jpg')}}" alt="Image">
                </div>
                <div class="col-md-7">
                    
                    <div class="d-flex mb-3">
                        <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Diseño web</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                    </p>
                    <a class="btn btn-link p-0" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="row blog-item px-3 pb-5">
                <div class="col-md-5">
                    <img class="img-fluid mb-4 mb-md-0" src="img/blog-3.jpg" alt="Image">
                </div>
                <div class="col-md-7">
                   
                    <div class="d-flex mb-3">
                        <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                    </p>
                    <a class="btn btn-link p-0" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- Inicio de la lista de blogs -->
        
        
        <!-- Subscribe Start -->
            @include('components.Suscríbete_Inicio')
        <!-- Subscribe End -->
        
        
        <!-- Blog List Start -->
        <div class="container bg-white pt-5">
            <div class="row blog-item px-3 pb-5">
                <div class="col-md-5">
                    <img class="img-fluid mb-4 mb-md-0" src="img/blog-4.jpg" alt="Image">
                </div>
                <div class="col-md-7">
                  
                    <div class="d-flex mb-3">
                        <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                    </p>
                    <a class="btn btn-link p-0" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="row blog-item px-3 pb-5">
                <div class="col-md-5">
                    <img class="img-fluid mb-4 mb-md-0" src="{{URL::asset('img/blog-2.jpg')}}" alt="Image">
                </div>
                <div class="col-md-7">
                   
                    <div class="d-flex mb-3">
                        <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                    </p>
                    <a class="btn btn-link p-0" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="row blog-item px-3 pb-5">
                <div class="col-md-5">
                    <img class="img-fluid mb-4 mb-md-0" src="{{URL::asset('img/blog-2.jpg')}}" alt="Image">
                </div>
                <div class="col-md-7">
                   
                    <div class="d-flex mb-3">
                        <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                    </p>
                    <a class="btn btn-link p-0" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- Blog List End -->
        
        

        <!-- Footer Start -->
        @include('components.layouts.footer')
        <!-- Footer End -->
       

 

@endsection
