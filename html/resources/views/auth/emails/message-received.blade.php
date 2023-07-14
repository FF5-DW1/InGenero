<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mensaje recibido</title>
</head>
<body>
    contenido del email

    <p>Recibiste un mensaje de:{{$msg['name']}}-{{$msg['email']}}</p>
<p><strong>Asunto:</strong>{{ $msg['subject']}}</p>
<p><strong>Asunto:</strong>{{ $msg['content']}}</p>
</body>
</html>

