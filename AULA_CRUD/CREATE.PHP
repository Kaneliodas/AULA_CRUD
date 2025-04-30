<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Funcionário</title>
</head>
<body>
    <h2>Adicionar Novo Funcionário</h2>
    <form action="insert.php" method="post">
        Nome: <input type="text" name="name" required><br>
        Endereço: <input type="text" name="address" required><br>
        Salário: <input type="number" name="salary" required><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
