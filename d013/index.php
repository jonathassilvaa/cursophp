<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D013</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 70px;
            margin: 5px;
        }

    </style>
</head> 
<body>
    <?php
        $saque = $_GET['saque'] ?? 0;
        $resto = $saque;
        $tot100 = floor($resto/100);
        $resto %= 100;
        $tot50 = floor($resto/50);
        $resto %= 50;
        $tot10 = floor($resto/10);
        $resto %= 10;
        $tot5 = floor($resto/5);
        $resto %= 5;
    ?>
   <main>
        <h1>Caixa Eletronico</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?= $saque ?>">
            <p style="font-size: 0.8em;"><sup>*</sup>Notas disponíveis: R$ 100, R$ 50, R$ 10 e R$ 5</p>
            <input type="submit" value="Sacar">
        </form>
        <section>
            <h2>Saque de R$ <?= $saque ?> realizado</h2>
            <p>Você irá receber as seguintes notas:</p>
            <ul>
                <li> <img src="images/100-reais.jpg" class="nota"> x <?= $tot100 ?></li>
                <li><img src="images/50-reais.jpg" 
                 class="nota"> x <?= $tot50 ?></li>
                <li><img src="images/10-reais.jpg" 
                class="nota"> x <?= $tot10 ?></li>
                <li><img src="images/5-reais.jpg" a
                 class="nota"> x <?= $tot5 ?></li>
            </ul>
        </section>
   </main>
</body>
</html>