<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <strong>İleşim formundan gelen mesaj</strong>
    <p>İsim: {{ $request->name}}</p>
    <p>Soyisim: {{$request->surname}}</p>
    <p>Numara: {{$request->phoneNumber}}</p>
    <p>Email: {{$request->email}}</p>
    <p>Paket: {{$request->package}}</p>
    <p>message: {{$request->message}}</p>
</body>
</html>
