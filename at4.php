<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <?php
    $sb = $_POST["cxsalario"];
    $hotra = $_POST["cxhoras"];
    $tm = $sb*$hotra;
    $ir = $tm*11/100;
    $inss = $tm*8/100;
    $sin = $tm*5/100;
    $sl= $tm-$inss-$sin-$ir;
    echo "Seu salario bruto é de R$".$tm. '</br>';
    echo "O IR foi de R$".$ir."</br>";
    echo "Seu INSS é de R$".$inss.'</br>';
    echo "Você pagou R$".$sin." para o sindicato</br>";
    echo "Seu salário líquido é de R$".$sl;
    ?>
</body>
</html>
