<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excluir escol</title>
    </head>
    
    <body>
        <form action="{{ route('excluir_turma', ['id' => $turma->id]) }}" method="POST">
            @csrf
            <label for="">Tem certeza que deseja excluir essa turma?</label><br/>
            <input type="text" name="nome" value="{{$turma->nome}}"><br/>
            <button>Sim</button>
        </form>
    </body>
</html>