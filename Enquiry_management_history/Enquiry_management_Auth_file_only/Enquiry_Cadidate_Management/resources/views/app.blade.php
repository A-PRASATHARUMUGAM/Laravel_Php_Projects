<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page </title>
    @livewireStyles()
</head>    

<body>
    <div class="Main-Container">
        @livewire('auth.login')      
    </div>

     @livewireScripts()
</body>
</html>