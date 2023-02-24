<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&amp;display=swap" rel="stylesheet">
        

     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <!-- Customized Bootstrap Stylesheet -->
    
</head>
<body>
    <div class="wrapper">
        @include('Admin.layouts.sidebar')
        <div class="content">
            @include('Admin.layouts.nav_admin')
            

            @yield('content_admin')

</div>

</div>

</body>

@vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/js/main.js',
        'resources/css/style.css',
        ])

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</html>