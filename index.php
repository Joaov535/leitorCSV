<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Leitor CSV</title>
</head>

<body>
    <div>
        <form action="processa.php" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo" id="arquivo">
            <button type="submit">Enviar</button>
        </form>
    </div>

    <button onclick="window.location.href = 'listar.php';">Ver todas as vendas</button>
</body>

</html>