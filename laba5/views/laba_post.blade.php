<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лаба</title>
</head>

<body>
    <form method = "post" action="/laba_post">
        @csrf
        <input type="text" name="first"><br>
        <input type="submit" value="надіслати">
    </form>
</body>
