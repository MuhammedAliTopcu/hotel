<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/room/edit" method="post">
        
        <input type="hidden" value="{{$selected->id}}" name="id" >
    
        <label for="name">name</label>
        <input type="text" name="name" value="{{$selected->name}}">

        <label for="floor">floor</label>
        <input type="text" name="floor" value="{{$selected->floor}}">

         <label for="type">type</label>
        <input type="text" name="type" value="{{$selected->type}}" > 

        <input type="submit" value="save">
        <a href="/room/delete/{{$selected->id}}">delete</a>

    </form>

</body>
</html>