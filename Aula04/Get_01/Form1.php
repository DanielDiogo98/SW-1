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
        <form action="exe01.php" method = "get"  >
            <p>Digite seu nome: <input type="text" name="cxnome" id="" required></p>
            <p>Digite sua Primeira nota: <input type="number" name="cxnota1"id="" min= "1" max="10" required></p>
            <p>Digite sua Segunda nota: <input type="number" name="cxnota2"id="" min= "1" max="10" required></p>
            <p>Digite sua Terceira nota: <input type="number" name="cxnota3"id="" min= "1" max="10" required></p>
            <input type="submit" value="Enviar">
        </form>
</body>
</html>