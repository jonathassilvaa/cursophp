<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $_GET['d2'] ?? 1;
        $quociente = intdiv($dividendo,$divisor);
        $resto = $dividendo % $divisor;
         
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="" method="$_GET">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" value="<?= $dividendo ?>">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" value="<?= $divisor ?>">
            <input type="submit" value="analisar">
        </form>
    </main>
    
    <section>
        <h2>Estrutura da divisão</h2>
        
        <table class="divisao">
                <tr>
                    <td><?= $dividendo ?></td>
                    <td><?= $divisor ?></td>
                </tr>
                <tr>
                    <td><?= $resto ?></td>
                    <td><?= $quociente ?></td>
                </tr>
        </table>

        
    </section>
    
</body>
</html>