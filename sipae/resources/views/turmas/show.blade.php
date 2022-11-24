<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver turma</title>
    </head>

    <body>
        <label for="">Status</label><br/>
        <input type="text" name="status" value="{{$turma->status}}"><br/>
        <label for="">Turno</label><br/>
        <input type="text" name="turno"  value="{{$turma->turno}}"><br/>
        <label for="">Nome</label><br/>
        <input type="text" name="nome"   value="{{$turma->nome}}"><br/>
    </body>
</html>