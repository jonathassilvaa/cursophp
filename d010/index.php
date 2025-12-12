<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D0010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $atual = date("Y");
        $nasc = $_GET['nasc'] ?? '2000';
        $ano = $_GET['ano'] ?? '$atual';
    ?>
   <main>
        <h1>Calculando sua idade</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min= "1900" value="<?= $nasc ?>" max="<?= $atual ?>">
            <label for="ano">Quer saber sua idade em que ano?</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?= $ano ?>">
            <input type="submit" value="Calcular idade">
        </form>
        <section>
            <h2>Resultado</h2>
            <p>Quem nasceu em <?= $nasc ?> vai ter <strong><?= $ano - $nasc ?></strong> anos em <?= $atual ?></p>
        </section>
   </main>
</body>
</html>