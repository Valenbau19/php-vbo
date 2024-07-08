<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$bingo = [];
$acumulador = 0;

for ($interacion1 = 0; $interacion1 < 5; $interacion1++) {
    $interno = [];
    for ($interacion2 = 0; $interacion2 < 5; $interacion2++) {
        $acumulador = $acumulador + 1;
        $interno[$interacion2] = $acumulador * 2;
    }
    $bingo[$interacion1] = $interno;
}
echo "<pre>";
print_r($bingo);
echo "letra B<br>";
for ($interacion2 = 0; $interacion2 < 5; $interacion2++) {
    echo $bingo[$interacion2][0] . "<br>";
}

echo "<br>letra I<br>";
for ($interacion2 = 0; $interacion2 < 5; $interacion2++) {
    echo $bingo[$interacion2][1] . "<br>";
}

echo "<br>letra N<br>";
for ($interacion2 = 0; $interacion2 < 5; $interacion2++) {
    echo $bingo[$interacion2][2] . "<br>";
}

echo "<br>letra G<br>";
for ($interacion2 = 0; $interacion2 < 5; $interacion2++) {
    echo $bingo[$interacion2][3] . "<br>";
}

echo "<br>letra O<br>";
for ($interacion2 = 0; $interacion2 < 5; $interacion2++) {
    echo $bingo[$interacion2][4] . "<br>";
}

for ($i = 0; $i < 3; $i++) {
    $line = "";
    for ($j = 0; $j < 3; $j++) {
        if ($i === $j || $i + $j === 3 - 1) {
            $line .= $bingo[$i][$j] . " ";
        } else {
            $line .= " ";
        }
    }
    echo $line . "<br>";
}

echo "<br>";

for ($i = 0; $i < 3; $i++) {
    $line = "";
    for ($j = 2; $j < 5; $j++) {
        if (($i + $j === 2) || ($i + $j === 4) || ($i + $j === 6)) {
            $line .= $bingo[$i][$j] . " ";
        } else {
            $line .= " ";
        }
    }
    echo $line . "<br>";
}

echo "<br>";

for ($i = 2; $i < 5; $i++) {
    $linea = "";
    for ($j = 0; $j < 3; $j++) {
        if (($i + $j === 2) || ($i + $j == 4) || ($i + $j === 2) || ($i + $j === 6)) {
            $linea .= $bingo[$i][$j] . " ";
        } else {
            $linea .= " ";
        }
    }
    echo $linea . "<br>";
}

echo "<br>";
?>
</body>
</html>