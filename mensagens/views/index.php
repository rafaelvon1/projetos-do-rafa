<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ola</title>
</head>
<body>
    <form action="index.php?action=inserir" method="post">
        <label for="mensagem">Escreva sua mensagem:</label>
        <br>
        <textarea id="mensagem" name="mensagem" rows="5" cols="40" placeholder="Digite seu texto aqui..."></textarea>
        <br>
        <button>enviar</button>
    </form>
    <button><a href="index.php">atualizar</a></button>
    <h1>Mensagens: </h1>

    <?php foreach ($selectAll as $line):?>             
        <h3>-><?= $line['mensagem'] ?></h3>        
    <?php endforeach;?>
    </div>
    
</body>
</html>