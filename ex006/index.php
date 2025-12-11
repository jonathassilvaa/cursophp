<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //cAPTURANDO VALORES DO FORMULARIO
        $val1 = $_GET['v1'] ?? 0;
        $val2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $val1 ?>" required>
            <label for="">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $val2 ?>" required>
            <input type="submit" value="Enviar">
        </form>

        <section>
            <h2>Resultado da soma</h2>
            <?php 
                echo "<p>O Resultado é: <strong>". $val1 + $val2 ."</strong></p>";
            ?>
        </section>
    </main>

</body>
</html>