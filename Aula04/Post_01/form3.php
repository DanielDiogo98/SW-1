<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01 - Formularios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="">Envio de notas</h1>
        <form action="exe03.php" method = "post"  >
            <p>Digite seu login: <input type="text" name="cxlogin"id="" required></p>
            <p>Digite sua Senha: <input type="password" name="cxsenha"id="" required></p>
            <input type="submit" value="Enviar">
        </form>
</body>
</html>