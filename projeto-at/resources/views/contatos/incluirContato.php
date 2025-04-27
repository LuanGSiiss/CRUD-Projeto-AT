<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir</title>
</head>
<body>
    <h1>Incluir</h1>
    <a href="./../Contatos">voltar</a>
    <form action="./../Contatos/Incluir" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <p>
            <label for="nome">Nome</label>
            <input type="text" name="nome" required>
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </p>
        <p>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" required>
        </p>
        <p>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" required>
        </p>
        <p>
            <label for="estado">Estado</label>
            <input type="text" name="estado" required>
        </p>
        
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>

