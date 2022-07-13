<html lang="de">
<head>
    <meta charset="UTF-8">

    <title>Kontakt</title>
</head>
<body>
    <?php include __DIR__."/php/templates/header.php" ?>

<form action="//" method="post">

<label for="kontakt_name">Name</label>
<input id="kontakt_name" type="text" placeholder="Vor- und Nachname" required>
<label for="kontakt_email">Email</label>
<input id="kontakt_email" type="email" placeholder="email@adresse.de" required>
<label for="kontakt_thema">Thema</label>
<select name="kontakt_thema" id="kontakt_thema">
    <option value="Fragen">Fragen</option>
    <option value="Verbesserungsvorschläge">Verbesserungsvorschläge</option>
    <option value="Sonstiges">Sonstiges</option>
</select>
<label for="kontakt_nachricht">Nachricht</label>
<input id="kontakt_nachricht" type="textarea" placeholder="Was können wir für Sie tun?" required>
<input id=newsletter type="checkbox">
<label for="newsletter">Ich möchte mich für den Newsletter anmelden</label>
<button type="submit">Absenden</button>

</form>

<?php include __DIR__."/php/templates/footer.php" ?>
</body>
</html>

