<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje de contacto</title>
</head>
<body>
    <h1>Has recibido un nuevo mensaje de contacto</h1>
    <p><strong>Nombre:</strong> {{ $datos['name'] }}</p>
    <p><strong>Correo electrónico:</strong> {{ $datos['email'] }}</p>
    <p><strong>Mensaje:</strong> {{ $datos['message'] }}</p>
</body>
</html>
