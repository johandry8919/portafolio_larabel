<!-- Navbar Start -->
<div class="container p-0">
    <nav class="navbar navbar-expand-lg bg-info navbar-dark">
        <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav m-auto">
                <a href="{{route('inicio')}}" class="nav-item nav-link active">Inicio</a>
                <a href="{{route('about')}}" class="nav-item nav-link">Acerca de</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                @if (!$usuario)
                <a href="{{route('signout')}}" class="nav-item nav-link">Inicion seccio</a>
                    @else
                    <a href="{{route('signout')}}" class="nav-item nav-link">Cerrar secion</a>
                @endif
               
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->