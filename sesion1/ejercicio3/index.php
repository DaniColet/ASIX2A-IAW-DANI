<!DOCTYPE html>
<head>
    <title>Salutació de Dani</title>
</head>
<body>
    <h2>Bon dia/tarda/nit segons l'hora (DANI)</h2>

<?php
$hora = date("H");

if ($hora >= 5 && $hora < 14) {
    echo "<p>Bon dia, són les $hora h.</p>";
} elseif ($hora >= 14 && $hora < 19) {
    echo "<p>Bon tarda, són les $hora h.</p>";
} else {
    echo "<p>Bon nit, són les $hora h.</p>";
}
?>
</body>
</html>