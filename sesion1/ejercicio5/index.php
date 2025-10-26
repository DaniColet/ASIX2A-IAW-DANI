<!DOCTYPE html>
<head>
    <title>IVA Dani</title>
</head>
<body>
    <h2>Calcula el preu amb IVA (DANI)</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $preu = $_POST["preu"];
    $iva = $_POST["iva"];

    $total = $preu * (1 + $iva / 100);
    echo "<p>El preu amb IVA del $iva% és $total €</p>";
} else {
    ?>
    <form method="POST" action="">
        Preu: <input type="number" name="preu" required><br><br>

        Tipus d'IVA:
        <select name="iva">
            <option value="4">4%</option>
            <option value="10">10%</option>
            <option value="21">21%</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>
    <?php
}