<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
    <form action="{{route ('exclui', ['id'=>$cadastros->id]) }}" method="post">
    {{ csrf_field() }}
    <label for="nome">tem certeza que dejesa excluir??</label> <br />
    <input type="text" name="nome" value="{{ $cadastros->nome }}"><br />
    <button>sim</button>
    </form>
    
</body>
</html>