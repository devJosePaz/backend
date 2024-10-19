<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css"> <!-- Chama o arquivo CSS -->
</head>
<body>
    <form action="formulario.php" method="post">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" required minlength="2" pattern="^[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]+\s?[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]*$" placeholder="ex:. João Silva"/>

        <label>Digite seu telefone:</label>
        <input type="text" name="telefone" placeholder="ex: (11) 9633-00326" required />

        <label>Digite seu email:</label>
        <input type="text" name="email" required />

        <input type="submit" value="Enviar para o servidor">
    </form>

    <?php
        $nome = '';

        if (isset($_POST['nome'])) { // Verifica se o formulário foi enviado
            $nome = $_POST['nome']; // Atribui o valor do campo "nome" à variável
            echo '<p>Olá, '. $nome .'! Seja bem-vindo(a)</p>'; // Mensagem de boas-vindas
            
        }
    ?>
</body>
</html>
