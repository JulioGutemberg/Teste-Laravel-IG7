<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar uma nova turma</title>
    </head>
    
    <body>
        <form action="{{ route('registrar_turma') }}" method="POST">
            @csrf
            <label for="">Status</label><br/>
            <input type="text" name="status"><br/>
            <label for="">Turno</label><br/>
            <input type="text" name="turno"><br/>
            <label for="">Nome</label><br/>
            <input type="text" name="nome"><br/>
            <button>Salvar</button>
        </form>    
    </body>
</html>