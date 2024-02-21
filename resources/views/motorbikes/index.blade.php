<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOTOR List</title>
</head>
<body>

    <h1>Motorbike list</h1>
        
        <h2>Total: {{$totalMotorbike}}</h2>

        @foreach($motorbikes as $motorbike)
        <li>{{$motorbike}}</li>
        @endforeach

</body>
</html>