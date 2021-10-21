<?php

/*
//Trata uma string vazia, validando se a mesma se trata de um valor "", 0, null, false, array()
empty ();

//Remove espaços inseridos no inicio e no final da minha string
trim();
*/

$nome = trim($_POST['nome']);
$interesses = $_POST['interesse'] ?? null;
$mensagem = strip_tags($_POST['mensagem']);

if(empty($nome)){
    echo "Informe o seu nome!";
}

if(is_null($interesses)) {
    echo "Selecione pelo menos uma área de interesse! <br>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário com PHP -  Validação</h1>
    <hr>
    <form action="form-validacao.php" method="post">
        <label for="">Nome</label> <br>
        <input type="text" name="nome">

        <hr>

        <label for="">Email</label> <br>
        <input type="text" name="email">

        <fieldset>
            <legend>Área de interesse</legend>
            <input type="checkbox" name="interesse[]" id="" value="informatica"> Informática <br>
            <input type="checkbox" name="interesse[]" id="" value="esporte"> Esporte <br>
            <input type="checkbox" name="interesse[]" id="" value="compras"> Compras <br>
            <input type="checkbox" name="interesse[]" id="" value="moda"> Moda <br>
            <input type="checkbox" name="interesse[]" id="" value="ciencia"> Ciência <br>
            <input type="checkbox" name="interesse[]" id="" value="religiao"> Religião <br>
        </fieldset>

        <hr>

        <label for="">Onde conheceu?</label>
        <select name="onde_conheceu" id="">
            <option value="">Selecione</option>
            <option value="google">Google</option>
            <option value="amigos">Amigos</option>
            <option value="tv">Tv</option>
        </select>

        <hr>

        <label for="">Mensagem</label> <br>
        <textarea name="mensagem" id="" cols="30" rows="10"></textarea>

        <fieldset>
            <legend>Redirecionar para:</legend>
            <input type="radio" name="redirecionar" id="" value="home"> Home <br>
            <input type="radio" name="redirecionar" id="" value="contato"> Contato <br>
        </fieldset>

        <hr>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>