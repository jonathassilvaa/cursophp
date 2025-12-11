<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? '' ;
        $peso1 = $_GET['p1'] ?? '' ;

        $valor2 = $_GET['v2'] ?? '' ;
        $peso2 = $_GET['p2'] ?? '' ;
    ?>
    <main>
        <h1>Medias Aritmeticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1:</label>
            <input type="number" name="v1" id="v1" required value="<?= $valor1  ?>">
            <label for="p1">Primeiro peso</label>
            <input type="number" name="p1" id="p1" required value="<?= $peso1 ?>">
            
            <label for="v2">Valor 2:</label>
            <input type="number" name="v2" id="v2"required value="<?= $valor2 ?>">
            <label for="p2">Segundo peso :</label>
            <input type="number" name="p2" id="p2" required value="<?= $peso2 ?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <?php 
            $ma = ($valor1 + $valor2);
            $mp = ($valor1 * $peso1 + $valor2 * $peso2)/($peso1 + $peso2);
        ?>
        <h2>Cálculo de Médias</h2>
        <p>Analisando os valores <?= $valor1 ?> e <?= $valor2 ?>:</p>
        <ul>
            <li>A média aritmética simples entre os valores é igual a <?= $ma ?>.</li>
            <li>A média ponderada com pesos  <?= $peso1 ?> e <?= $peso2 ?> é igual a <?= $mp ?>.</li>
        </ul>
    </section>
</body>
</html>