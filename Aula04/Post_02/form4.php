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
        <form action="exe04.php" method = "post"  >
            <p>Digite seu nome: <input type="text" name="cxnome"id="" required></p>
            <p>Digite seu email <E-mail></E-mail>: <input type="text" name="cxemail"id="" required></p>
            <p>Digite sua data de nascimento: <input type="date" name="cxidade"id="" required></p>
            <p>Digite sua bendeira de cartao: <input type="text" name="cxband"id=""  list="bands"required></p>
            <datalist id="bands">
                <option value="Visa">
                <option value="Mastercard">
                <option value="Elo">
                <option value="Hipercard">
                <option value="American express">
            </datalist>
            <input type="submit" value="Enviar">
        </form>
</body>
</html>