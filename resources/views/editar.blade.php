<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR CADASTRO</title>
</head>
<body>
    <form action="{{ route ('atualiza', ['id'=> $cadastros->id]) }}" method="post">
    {{ csrf_field() }}
    <label for="nome"></label> <br />
    <input type="text" name="nome" value="{{$cadastros->nome}}"> <br />
    <label for="cpf"></label> <br />
    <input type="text" name="cpf" value="{{$cadastros->cpf}}"> <br />
    <label for="descricao"></label> <br />
    <input type="text" name="descricao" value="{{$cadastros->descricao}}"> <br />
    <label for="valor"></label> <br />
    <input type="text" name="valor" value="{{$cadastros->valor}}"> <br />

    <button>Salvar</button>
    </form>
    
</body>
</html>