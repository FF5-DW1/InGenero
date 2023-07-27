{{-- <!DOCTYPE html>
<html>
<head>
    <title>Correo de contacto</title>
</head>
<body>
    <h2>Has recibido un correo de contacto</h2>
    <p>Nombre: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Mensaje: {{ $message }}</p>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html>
<head>
    <title>Correo de contacto</title>
</head>
<body>
    <h2>Has recibido un correo de contacto</h2>
    <p>Nombre: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Mensaje: {{ $mensaje }}</p> <!-- Cambié $message a $mensaje -->
</body>
</html> --}}
<!DOCTYPE html>
<html>
<head>
    <title>Correo de contacto</title>
</head>
<body>
    <h2>Has recibido un correo de contacto</h2>
    <p>Nombre: {{ $name ?? '' }}</p>
    <p>Email: {{ $email ?? '' }}</p>
    <p>Mensaje: {{ $mensaje ?? '' }}</p>
</body>
</html>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


   
