<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
</head>
<body>
    <form action="{{ route ('ver') }}" method="POST">
    {{ csrf_field() }}
       
        <label for="nome">nome</label> <br />
        <input type="text" name="nome"> <br />
        <label for="cpf">CPF</label> <br />
        <input type="text" name="cpf"> <br />
        <label for="descricao">Descricao</label> <br />
        <input type="text" name="descricao"> <br />
        <label for="valor">Valor</label> <br />
        <input type="text" name="valor"> <br />

    <button>Salvar</button>
    </form>
    
</body>
</html>