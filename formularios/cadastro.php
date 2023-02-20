<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border: 2px solid black;
        }

        th {
            background-color: gray;
        }

        td {
            background-color: rgb(240, 240, 182);
        }
    </style>
</head>
<body>
    <table>

        <thead>
            <th>Chave</th>
            <th>Valor</th>
        </thead>
        <tbody>
            <?php 
        
        
                foreach ($_POST as $chave => $valor) {
                    echo "<tr>";
                    echo "<td>" . "$chave" . "</td>";
                    echo "<td>" . "$valor" . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        
    </table>    
</body>
</html>

