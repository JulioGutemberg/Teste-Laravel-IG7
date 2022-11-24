<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver escola</title>
    </head>

    <body>
        <label for="">Status</label><br/>
        <input type="text" name="status"   value="{{$escola->status}}"><br/>
        <label for="">Inep</label><br/>
        <input type="text" name="inep"     value="{{$escola->inep}}"><br/>
        <label for="">Endereço</label><br/>
        <input type="text" name="endereço" value="{{$escola->endereço}}"><br/>
        <label for="">Nome</label><br/>
        <input type="text" name="nome"     value="{{$escola->nome}}"><br/>
    </body>
</html>