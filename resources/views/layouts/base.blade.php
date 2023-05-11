<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <!-- Librerias JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Estilos Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="styleheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand"
            href="#">Navbar
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Compras</a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Sectores</a>    
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Exportar</a>    
                    </li>
                    
            </ul>
            
        </div>
        </div>
        
    </nav>
    <!-- <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
            <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item p-3">
            <a class="nav-link" href="#">Inicio</a>
                </li>
            <li class="nav-item p-3">
               <a class="nav-link" href="#">Compras</a>  
            </li>
            <li class="nav-item p-3">
               <a class="nav-link" href="#">Departamentos</a>    
            </li>
            <li class="nav-item p-3">
               <a class="nav-link" href="#">Exportes</a> 
            </li>
            <li class="nav-item p-3">
               <a class="nav-link" href="#">Ventas</a> 
            </li>
            <li class="nav-item p-3">
               <a class="nav-link" href="#">Usuarios</a> 
            </li>
            <li class="nav-item p-3">
               <a class="nav-link" href="#">Información del usuario</a> 
            </li>
            <li class="nav-item p-3">
               <a class="nav-link" href="#">Cerrar sesión</a> 
            </li>
            </ul>
            </div>

            </nav>

        </div>
    </div> -->


    <!-- IMPORTANTE PONER ESTO PARA QUE APAREZCA EL CONTENIDO INCLUIDO 
    EN LAS OTRAS PAGINAS: welcome, ventas... -->
    <div class="container">
        @yield('content')
    </div>
    


    <!-- <h1>Bienvenido al sistema</h1>
    <h3>Hola usuario ha ingresado correctamente</h3>
    <div class="container">
        <div class="col-md-9 justify-content">
            Esta es la base de su aplicación, 
            debajo se colocará todo el contenido dinámico.
            @yield('contenido')
        </div>
    </div> -->

</body>
</html>