<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    @foreach($rooms as $room)
        <li>{{$room->name}}--{{$room->type}}--{{$room->floor}}---<a href="/room/delete/{{$room->id}}">delete</a>------<a href="/room/show/{{$room->id}}">edit</a>
   </li>
    @endforeach
    </ul> 
</body>
</html>