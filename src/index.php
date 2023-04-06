<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="post" action="main.php">
        <label for="num1">Número 1:</label>
        <input type="text" name="num1" id="num1">
        <br>
        <label for="num1">Número 2:</label>
        <input type="text" name="num2" id="num2">
        <br>
        <label for="op" id="op">Operação:</label>
        <select name="op" id="op">
            <option value="+">Somar</option>
            <option value="*">Multiplicar</option>
            <option value="-">Subtrair</option>
            <option value="/">Dividir</option>
        </select>
        <br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>