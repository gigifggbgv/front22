<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //criptografia de senha
echo password_hash(123456, PASSWORD_DEFAULT);

    //receber dados do formulario
    $dados = filter_input_array (INPUT_POST, FILTER_DEFAULT);

    //Acessar o IF quando o user clicar no botao de acessar o formulario
    if(!empty($dados['sendLogin'])){
        var_dump($dados);
    }

   ?>
    <!--- inicio do forms--> 
    <form metod= "POST" action=""> 

     <label>Usuário</label>
     <input type="text" name="usuario" placeholder="Digite um usuário">

    <br><br>

    <label>senha</label>
     <input type="password" name="senha" placeholder="Digite a senha"> <br><br>

    <input type="submit" name="sendLogin" value="acessar"> <br><br>
    </form>

</body>
</html> 