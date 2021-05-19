<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Travels</title>
</head>
<body>
  @foreach ($travels as $travel)
        <div>
            <h1>{{$travel->destination}}</h1>
            <h2>{{$travel->num_people}}</h2>
            <p>{{$travel->type}}</p>
            <p>{{$travel->date}}</p>
            <p>{{$travel->price}}</p>
        </div>
    @endforeach

</body>
</html>
