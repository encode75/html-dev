<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá</title>
</head>
<body>
    <h1>Testando PHP... Pasta html-dev</h1>
    <pre>
    <?php
        echo "<h2>Olá, mundo!</h2>"; 
        $dir    = '/home/emerson/html-dev';
        $files1 = scandir($dir);
        $files2 = scandir($dir, 1);

        echo "<br/>";
        print_r($files1);
        echo "<br/>";
        print_r($files2);
    ?>
    </pre>
</body>
</html>