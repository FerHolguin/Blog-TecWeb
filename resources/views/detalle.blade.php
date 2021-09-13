<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml%22%3E
<head>
    <meta charset="utf-8" />
    <title>Pantalla welcome</title>
</head>
<body>
    <h1>Pantalla de contacto</h1>

    <p>Nombre:{{$nombre}}</p>
    <p> Apellido: {{$apellido}}</p>
    <p>Tel: {{$tel}}</p>
    <p>Correo: {{$email}}</p>

    <a href=" {{ route ('index') }}"> Regresar a inicio </a>
</body>
</html>