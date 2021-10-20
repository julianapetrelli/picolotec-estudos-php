<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$interesses = $_POST['interesse'];
$onde_conheceu = $_POST['onde_conheceu'];
$mensagem = $_POST ['mensagem'];
$redirecionar = $_POST ['redirecionar'];

echo "<strong>Nome:<strong>" . $nome . "<br>"; 
echo "<strong>E-mail:<strong>" . $email . "<br>";


echo "<br>";

echo "<strong>Interesses:<strong>" . "<br>";
echo "<ul>";

foreach($interesses as $interesse) {
    echo "<li>$interesse</li>";
}

echo "</ul>";

echo "<strong>Onde conheceu: <strong>" . $onde_conheceu . "<br>";
echo "<strong>Redirecionar: <strong>" . $redirecionar . "<br>";

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
    <h1>Formulário com PHP</h1>
    <hr>
    <form action="form-post.php" method="post">
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