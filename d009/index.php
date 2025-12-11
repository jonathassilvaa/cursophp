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
        $numero = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Informe um numero</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="$_GET">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?= $numero ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $rq = $numero ** (1/2);
            $rc = $numero ** (1/3);

            echo "<p>A raiz quadrada é: ". number_format($rq,2,",",".") ."<br> A raiz cúbica é: ". number_format($rc,2,",",".") ."</p>";
        ?>
    </section>
</body>
</html>