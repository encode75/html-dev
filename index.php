<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html-Dev</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            padding: 0px;
            margin: 0px;
            
        }

        html, body {
            
            
        }

        html {
            background-image: linear-gradient(135deg, #233eff, #0b0a60);
        }

        body {
        
            background: url("./images/html5.png") no-repeat;
            background-position: center center;
            background-size: auto;
        }

        

        .logo {
            width: 150px;    
        }

        p#title {
            margin: 10px;
            padding: 10px;
            text-align: center;
            border: 2px solid orangered;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <p id="title"> Lista de Projetos</p>
   
    <table>
        <thead>
            <th>Type</th>
            <th>Icon</th>
            <th>Name</th>
            <th>Del</th>
        </thead>
        <tbody>
            <?php
                $dir    = '/home/emerson/html-dev';
                $files = scandir($dir);
                foreach ($files as $file) {
                    echo "<tr>";
                    echo "<td><img src='./images/folder.png' alt='folder' width='24px' height></td>";
                    echo "<td>x</td>";
                    echo "<td>" . $file . "</td>";
                    echo "<td>y</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>

    </table>
        <?php
            $dir    = '/home/emerson/html-dev';
            $files = scandir($dir);
            foreach ($files as $file) {
                echo "<p>" . "$file" . "</p>";
            }
        ?>
</body>
</html>