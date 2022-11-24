<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver Professor</title>
    </head>

    <body>
        <label for="">Status</label><br/>
        <input type="text" name="status" value="{{$professor->status}}"><br/>
        <label for="">Nome</label><br/>
        <input type="text" name="nome"   value="{{$professor->nome}}"><br/>
    </body>
</html>