<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <form action="#" method="POST">
        Valor em metros:
        <input type = "number" name="cxmetro">
    </form>

    <?php
    $metr = $_POST["cxmetro"];
    $cent = $metr*100;
    echo $metr." metros são ".$cent." centimetros";
    ?>

</body>
</html>