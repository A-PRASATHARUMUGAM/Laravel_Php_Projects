<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create the data</title>
</head>
<body>

    <h1>Create the data</h1>

    <form action="{{route('create')}}" method="POST">
    @csrf
        <div>
            <label for="">Enter your name</label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="">Enter your Age</label>
            <input type="number" name="age">
        </div>

        <div>
            <label for="">Enter your state</label>
            <input type="text" name="state">
        </div>
        <div>
            <label for="">Enter your mobile Number</label>
            <input type="number" name="mobile_number">
        </div>


        <button type="submit">Submit</button>
    </form>

<h2>Customer List</h2>

{{-- Show Data  --}}
@foreach ($registeruser as $item)
    <p><strong>Email:</strong> {{ $item->email }}</p>
@endforeach


@foreach($CustomerDetails as $item)

    <p><strong>Id:</strong> {{ $item->id }}</p>
    <p><strong>Name:</strong> {{ $item->name }}</p>
    <p><strong>Age:</strong> {{ $item->age }}</p>
    <p><strong>State:</strong> {{ $item->state }}</p>
    <p><strong>Mobile Number:</strong> {{ $item->mobile_number }}</p>



   {{-- Update the data  --}}
       <h1>Update the data</h1>

    <form action="{{route('customer.update',$item->id)}}" method="POST">
    @csrf
    @method('PUT')
    
        <div>
            <label for="">Enter your name</label>
            <input type="text" name="name" value="{{$item->name}}" >
        </div>

        <div>
            <label for="">Enter your Age</label>
            <input type="number" name="age" value="{{$item->age}}" >
        </div>

        <div>
            <label for="">Enter your state</label>
            <input type="text" name="state"value="{{$item->state}}" >
        </div>
        <div>
            <label for="">Enter your mobile Number</label>
            <input type="number" name="mobile_number"value="{{$item->mobile_number}}" >
        </div>

    <button type="submit">Update</button>

    
   </form>

     {{-- Delete Data  --}}
    <form action="{{route('customer.delete',$item->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
   </form>

<hr>
@endforeach


    
</body>
</html