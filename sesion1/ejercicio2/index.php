<!DOCTYPE html>
<head>
    <title>Conversor Dani</title>
</head>
<body>
    
<h2>Conversor de Diners de Dani</h2>
<p>Introduïu una quantitat i convertirem d'€ a $ o al revés</p>

<?php
// Canvi fix
$canvi = 1.1; // 1€ = 1,1$

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Dades del formulari
    $quantitat = $_POST["quantitat"];
    $direccio = $_POST["direccio"];

    // Conversió segons l'opció triada
    if ($direccio == "euros_dolars") {
        $resultat = $quantitat * $canvi;
        echo "<p>$quantitat € són aproximadament $resultat $</p>";
    } else {
        $resultat = $quantitat / $canvi;
        echo "<p>$quantitat $ són aproximadament $resultat €</p>";
    }

} else {
    // Formulari simple
    ?>
    <form method="POST" action="">
        Quantitat: <input type="number" name="quantitat" required><br><br>
        <input type="radio" name="direccio" value="euros_dolars" checked> Euros a Dòlars<br>
        <input type="radio" name="direccio" value="dolars_euros"> Dòlars a Euros<br><br>
        <input type="submit" value="Convertir">
    </form>
    <?php
}
?>

</body>
</html>