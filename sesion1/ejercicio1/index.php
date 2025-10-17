<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["Daniel"]);
    $cognoms = htmlspecialchars($_POST["Colet"]);
    $email = htmlspecialchars($_POST["danicolet@test.com"]);
    $missatge = htmlspecialchars($_POST["Hola, vull més informació sobre els vostres serveis."]);

    echo "Missatge rebut, $nom. Gràcies per contactar. Et respondrem a $email";
} else {
?>
<form method="POST" action="">
    Nom: <input type="text" name="nom" required><br>
    Cognoms: <input type="text" name="cognoms" required><br>
    Email: <input type="email" name="email" required><br>
    Missatge: <textarea name="missatge" required></textarea><br>
    <input type="submit" value="Enviar">
</form>
<?php
}
?>