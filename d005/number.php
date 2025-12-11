<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D005 Result</title>
</head>
<body>
    <h1>Analysis Result</h1>

    <mai>
        <?php
            $number = $_POST['number'] ?? 00 ;
            echo "<p>Analysing number...<br>Your number is: <strong>". number_format($number,3,",",".") ."</strong></p>";

            $int = (int)$number;
            $frac = $number - $int;

            echo "<p>The integrer part of your numer is ". number_format("$int",0,",",".",) ." <br>and the real part is ". number_format($frac,3,".",",") . "</p>"
        ?>
    </main>
    <a href="index.html">Voltar para a pagina inicial</a>
</body>
</html>