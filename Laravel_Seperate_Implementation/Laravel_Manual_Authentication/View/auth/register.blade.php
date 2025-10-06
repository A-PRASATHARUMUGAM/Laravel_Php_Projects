<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
</head>
<body>
    <h1>Register Page</h1>

   @if ($errors->any())

   @foreach ( $errors->all() as $error )
   
   <li>{{ $error}}</li>
       
   @endforeach

   @endif
    <form action="/store" method="POST">
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
        
  

        {{-- Password --}}
        <div>
            <label for="">Enter your Password</label>
            <input type="password" name="password">
        </div>
    

        {{-- c-Password --}}
        <div>
            <label for="">Enter your Password</label>
            <input type="password" name="password_confirmation">
        </div>
    
      <button type="submit">Register</button>
    </form>

    <a href="/login">Login</a>
</body>
</html>