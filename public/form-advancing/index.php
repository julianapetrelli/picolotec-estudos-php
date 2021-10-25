<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.css">
</head>
<body>
    <form action="send.php" method="post">
        <div>
            <input name="nome" type="text" placeholder="Digite seu nome">
            <input name="email" type="email" placeholder="Digite seu E-mail">
        </div>
        <div>
            <textarea name="descricao" cols="60" rows="5" placeholder="Descrição"></textarea>
        </div>
        <div>
            <input type="submit" value="enviar">
        </div>
    </form>
</body>
</html>