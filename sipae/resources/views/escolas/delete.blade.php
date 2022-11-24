<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excluir escol</title>
    </head>
    
    <body>
        <form action="{{ route('excluir_escola', ['id' => $escola->id]) }}" method="POST">
            @csrf
            <label for="">Tem certeza que deseja excluir essa escola?</label><br/>
            <input type="text" name="nome" value="{{$escola->nome}}">
            <label for="">com inep</label>
            <input type="text" name="inep" value="{{$escola->inep}}"><br/>
            <button>Sim</button>
        </form>
    </body>
</html>