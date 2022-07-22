<!doctype html>

<html lang="de">

<head>
    <meta charset="UTF-8">

    <title>Kontakt</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <?php include "templates/header.php" ?>

    <div class="content-wrapper">
        <div class="form">


            <?php if (!isset($_POST["submitted"])) { ?>


                <form action="<?php "php/kontakt.php" ?>" method="post">

                    <label for="kontakt_name">Name<sup>*</sup></label>
                    <input name="kontakt_name" id="kontakt_name" type="text" placeholder="Vor- und Nachname" required>
                    <label for="kontakt_email">Email<sup>*</sup></label>
                    <input name="kontakt_email" id="kontakt_email" type="email" placeholder="email@adresse.de" required>
                    <label for="kontakt_thema">Thema<sup>*</sup></label>
                    <select name="kontakt_thema" id="kontakt_thema">
                        <option value="Fragen">Fragen<sup>*</sup></option>
                        <option value="Verbesserungsvorschläge">Verbesserungsvorschläge</option>
                        <option value="Sonstiges">Sonstiges</option>
                    </select>
                    <label for="kontakt_nachricht">Nachricht</label>
                    <textarea name="kontakt_nachricht" id="kontakt_nachricht" placeholder="Was können wir für Sie tun?" required></textarea>
                    <button type="submit" name="submitted" value="true">Absenden</button>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <hr>
                    <small><sup>*</sup>Pflichtfelder</small>
                </form>

            <?php } else { ?>
                <img src="../assets/images/Danke.png">
                <h3>Vielen Dank für ihre Nachricht <?php echo $_POST["kontakt_name"]; ?>!</h3>
                <p>Wir setzen uns schnellstmöglich mit Ihnen in Verbindung.</p>
                <br>
                <br>
                <a type="button" href="../index.php">Zurück zur Startseite</a>
            <?php } ?>
        </div>

    </div>
    <?php include "templates/footer.php" ?>
</body>

</html>