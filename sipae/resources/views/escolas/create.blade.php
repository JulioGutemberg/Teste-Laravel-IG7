<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar uma nova escola</title>
    </head>
    
    <body>
        <form action="{{ route('nova_escola_add') }}" method="POST">
            @csrf
            <label for="">Status</label><br/>
            <input type="text" name="status"><br/>
            <label for="">INEP</label><br/>
            <input type="text" name="inep"><br/>
            <label for="">Endereço</label><br/>
            <input type="text" name="endereço"><br/>
            <label for="">Nome</label><br/>
            <input type="text" name="nome"><br/>
            <button>Salvar</button>
        </form>    
    </body>
</html>