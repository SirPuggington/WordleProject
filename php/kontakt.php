<html lang="de">
<head>
    <meta charset="UTF-8">

    <title>Kontakt</title>
</head>
<body>
    <?php include __DIR__."/templates/header.php" ?>


<?php if(!isset($_POST["submitted"])){ ?>


<form action="<?php __DIR__."/php/kontakt.php" ?>" method="post">

<label for="kontakt_name">Name</label>
<input name="kontakt_name" id="kontakt_name" type="text" placeholder="Vor- und Nachname" required>
<label for="kontakt_email">Email</label>
<input name="kontakt_email" id="kontakt_email" type="email" placeholder="email@adresse.de" required>
<label for="kontakt_thema">Thema</label>
<select name="kontakt_thema" id="kontakt_thema">
    <option value="Fragen">Fragen</option>
    <option value="Verbesserungsvorschläge">Verbesserungsvorschläge</option>
    <option value="Sonstiges">Sonstiges</option>
</select>
<label for="kontakt_nachricht">Nachricht</label>
<input name="kontakt_nachricht"id="kontakt_nachricht" type="textarea" placeholder="Was können wir für Sie tun?" required>
<input name="newsletter" id=newsletter type="checkbox">
<label for="newsletter">Ich möchte mich für den Newsletter anmelden</label>
<button type="submit" name="submitted" value="true">Absenden</button>

</form>

<?php }else{ ?>
    <h3>Vielen Dank für ihre Nachricht <?php echo $_POST["kontakt_name"]?>!</h3>   
    <p>Wir setzen uns schnellstmöglich mit Ihnen in Verbindung.</p> 
<?php } ?>

<?php include __DIR__."/templates/footer.php" ?>
</body>
</html>

