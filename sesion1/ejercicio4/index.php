<!DOCTYPE html>
<head>
    <title>Enquesta musical Dani</title>
</head>
<body>
    <h2>Enquesta: Quin estil de música t'agrada més? (DANI)</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $estil = $_POST["estil"];

    if ($estil == "hardstyle") {
        echo "<p>Hardstyle, aixecar pols i donar patades per lliberar enèrgia? Sona molt bé!</p>";
    } elseif ($estil == "makina") {
        echo "<p>Si t'agrada la makina, hauries de visitar València!</p>";
    } elseif ($estil == "jazz") {
        echo "<p>Jazzzz! Ambient de bar i cocktails</p>";
    } elseif ($estil == "reggae") {
        echo "<p>Jamaica i Bob Marley, la millor desconexió ;)</p>";
    } else {
        echo "<p>No he trobat informació per aquest estil.</p>";
    }
} else {

    // Formulari simple
    ?>
    <form method="POST" action="">
        <input type="radio" name="estil" value="hardstyle" checked> Hardstyle<br>
        <input type="radio" name="estil" value="makina"> Makina<br>
        <input type="radio" name="estil" value="jazz"> Jazz<br>
        <input type="radio" name="estil" value="reggae"> Reggae<br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
}