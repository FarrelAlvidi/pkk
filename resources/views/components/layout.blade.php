<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="img/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{$title}}</title>

</head>
<body>
    
    <x-navbar></x-navbar>

    <main class="mx-auto ">
        
        {{ $slot}}

    </main>

        <x-footer></x-footer>
</body>
</html>



