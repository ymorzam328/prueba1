<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido al sistema</h1>
    <h3>Hola usuario ha ingresado correctamente</h3>
    <div class="container">
        <div class="col-md-9 justify-content">
            Esta es la base de su aplicación, 
            debajo se colocará todo el contenido dinámico.
            @yield('contenido')
        </div>
    </div>

</body>
</html>