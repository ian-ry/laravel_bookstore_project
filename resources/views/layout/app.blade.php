<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href={{ asset('css/create.css')}}>
</head>
<body style="background-color: #35374B">
    
    <header></header>
    <div>@yield('content')</div>
    <footer></footer>

</body>
</html>