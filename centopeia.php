<!doctype html>
<html>

<head>
<meta charset="utf-8" />
<title>Gerador de Centopeias</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body><center>
<form method="get">
<input type="number" placeholder="número de pernas" name="pernas" />
<input type="submit" value="gerar" />
</form><br /><br />

<?php
if ($_GET["pernas"] != "") {
echo "╚⊙ ⊙╝<br />";
$f = 0;
while ($f < $_GET["pernas"]) {
echo "╚═(███)═╝<br />";
$f++;
}
}
?>

</center></body>

</html>