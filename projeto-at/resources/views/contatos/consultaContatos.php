<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE</title>
</head>
<body>
    <h1>TESTE</h1>
    <a href="Contatos/Incluir">Incluir</a>
    <div name="consulta-contatos">
        <h2>Lista de Contatos</h2>
    <?php
        echo '<ul>'; 
        foreach($contatos as $contato) {
            echo '<li>Nome: ' . $contato->nome . '; Email: ' . $contato->email . '</li>';
            echo '<a href="./Visualizar/'. $contato->id.'">Visualizar</a>';
            echo '<a href="./Manutencao?id='. $contato->id.'">Alterar</a>';
            echo '<form action="./Manutencao?id='.$contato->id.'" method="POST" style="display:inline;">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit">Excluir</button>
            </form>';
        }
        echo '</ul>';
    ?>
    </div>
    
</body>
</html>

