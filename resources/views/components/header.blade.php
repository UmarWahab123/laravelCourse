<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>This is a header Component</h1>
    <h3>Hello {{$name}}</h3>
    <h3>Fruites are :</h3>

    @foreach($fruites as $fruit)
    <ul>
    <li>{{$fruit}}</li>
    </ul>
    @endforeach
</div>
    </div>
</body>
</html>
