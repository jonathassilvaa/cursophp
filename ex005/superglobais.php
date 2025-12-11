<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                echo "SUPERGLOBAL GET\n";
                var_dump($_GET);
                //Querry String: ?nome=Joao&idade=25
                //Quanndo tem solicitação via URL, os dados ficam armazenados na superglobal $_GET
                echo "\nSUPERGLOBAL POST\n";
                var_dump($_POST);
                //Quando tem solicitação via formulário, os dados ficam armazenados na superglobal $_POST
                echo "\nSUPERGLOBAL REQUEST\n";
                var_dump($_REQUEST);
                //A superglobal $_REQUEST armazena dados tanto de $_GET quanto de $_POST
            ?>

        </pre>

    </main>
    
</body>
</html>