<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
</head>
<body>
 <h1>User View</h1>
 <h2>User name is {{$name}}</h2>  <!--call here the variable -->

<!--in this three line we call the array -->
 <p>Name : {{$users['name']}}</p>
 <p>Email : {{$users['email']}}</p>
 <p>Phone : {{$users['phone']}}</p>
</body>
</html>
