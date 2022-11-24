<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar turma</title>
    </head>

    <body>
        <form action="{{ route('editar_turma', ['id' => $turma->id]) }}" method="POST">
            @csrf
            <label for="">Status</label><br/>
            <input type="text" name="status"   value="{{$turma->status     }}"><br/>
            <label for="">Turno</label><br/>
            <input type="text" name="turno"    value="{{$turma->turno      }}"><br/>
            <label for="">Nome</label><br/>
            <input type="text" name="nome"     value="{{$turma->nome       }}"><br/>
            <button>Salvar</button>
        </form>
    </body>
</html>