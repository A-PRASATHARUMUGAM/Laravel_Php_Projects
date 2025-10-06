<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>

    <h1>Login Page</h1>
    

    <form action="/authentication" method="POST">
        @csrf
        {{-- Username --}}
        <div>
            <label for="">Enter your username</label>
            <input type="text" name="name">
        </div>
    
        {{-- email --}}
        <div>
            <label for="">Enter your email</label>
            <input type="text" name="email">
        </div>

            @if ($errors->has('email'))

           <h4> {{$errors->first('email')}}</h4>
          
         @endif

        {{-- Password --}}
        <div>
            <label for="">Enter your Password</label>
            <input type="password" name="password">
        </div>
    
      <button type="submit">Login</button>
    </form>

    
    <a href="/register">register</a>
</body>
</html>