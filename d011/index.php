<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_REQUEST['preco'] ?? 0;
        $reaj = $_REQUEST['reaj'] ?? 0;
    ?>
   <main>
        <h1>Reajustador de preços</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min= "0.10" value="<?= $preco ?>" step="0.01">

            <label for="reaj">Qual será o percentual de ajuste?
            (<strong><span id="p">?</strong>)
            </label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudarValor()" value="<?= $reaj ?>">

            <input type="submit" value="Calcular reajuste">
        </form>
        <?php 
            $aumento = ($preco * $reaj) / 100;
            $newPrec = $preco + $aumento;
            echo "$newPrec"
        ?>
        <section>
            <h2>Resultado do Reajuste</h2>
            <p>O produto que custava<?= $preco  ?> com <strong><?= $reaj ."%" ?> </strong> de aumento,vai passar a custar  <?= $newPrec ?> a partir de agora.</p>
            
        </section>
   </main>
   <script>
        mudarValor();
        function mudarValor(){
            p.innerText = reaj.value + "%";
        }
   </script>
</body>
</html>