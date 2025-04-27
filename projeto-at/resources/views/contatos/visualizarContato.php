<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>
</head>
<body>
    <h1>Visualizar</h1>
    <a href="../Contatos">Voltar</a>
    <div name="visualizar-contato">
        <ul>
        <?php
            echo '<ul>ID: ' . $contato->id . '</li>'; 
            echo '<ul>Nome: ' . $contato->nome . '</li>';
            echo '<ul>E-mail: ' . $contato->email . '</li>';
            echo '<ul>Telefone: ' . $contato->telefone . '</li>';
            echo '<ul>Cidade: ' . $contato->cidade . '</li>';
            echo '<ul>Estado: ' . $contato->estado . '</li>';
        ?>
        </ul>
    </div>
    
</body>
</html>

