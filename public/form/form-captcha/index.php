<?php

session_start();

?>


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

    <div class="bg-gradient-to-r from-blue-500 to-purple-400">
        <div class="flex items-center justify-center h-screen">
            <div class="bg-white rounded-lg shadow-2xl">
                <form action="send.php" method="post" enctype="multipart/form-data">
                    <div class="bg-gray-900 rounded-t-lg text-white uppercase font-bold text-center p-3">
                        <p>Deixe o seu feedback</p>
                    </div>

                    <div class="py-6 px-9">
                        <div class="grid gap-y-4 grid-cols-1 text-center justify-items-center">
                            <div class="flex  gap-x-4">
                                <div>
                                    <input type="hidden" name="captcha-validation">
                                    <p class="text-left p-1">Nome</p>
                                    <input name="nome" type="text" placeholder="Digite seu nome" class="rounded-md p-2 bg-gray-100">
                                </div>

                                <div>   
                                    <p class="text-left p-1">E-mail</p>
                                    <input name="email" type="email" placeholder="Digite seu E-mail" class="rounded-md p-2 bg-gray-100">
                                </div>
                            </div>
                            <div class="w-full">
                            <p class="text-left p-1">Deixe o seu comentário:</p>
                                <textarea name="descricao" rows="7" placeholder="Descrição" class="w-full rounded-md p-2 bg-gray-100"></textarea>
                            </div>
                            <div class="flex items-center space-x-8">
                                <div>
                                    <img src="./captcha.php" alt="" class="rounded-md">
                                </div>
                                <div>
                                    <input name="_captcha" type="text" class="rounded-md py-2 w-48 bg-gray-100 pl-5" placeholder="Digite o captcha">
                                </div>
                            </div>
                            <div class="w-full py-3">
                                    <input type="submit" value="Enviar" class="rounded-md px-8 py-2 bg-purple-600 text-white">
                            </div>
                    </div>
                   
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>