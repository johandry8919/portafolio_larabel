<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">
        <!-- Favicon -->
        <link href="/img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&amp;display=swap" rel="stylesheet">
        

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <!-- Customized Bootstrap Stylesheet -->
       
        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
            'resources/js/main.js',
            'resources/js/contact.js',
            'resources/js/jqBootstrapValidation.min.js',
            'resources/css/style.css',
            'resources/js/easing.js',
            'resources/js/easing.min.js',
            'resources/js/waypoints.min.js',
            ])
    </head>
<body>
   
    <div class="wrapper">
        @include('components.layouts.sidebar')
        <div class="content">
        
        @include('components.layouts.navigation')

        @yield('content')

</div>

</div>


    
    <!-- Back to Top -->
    <a href="#" class="back-to-top" style="display: none;"><i class="fa fa-angle-double-up"></i></a>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>



</body>
</html>