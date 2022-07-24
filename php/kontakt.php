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
                        <option value="Fragen">Fragen</option>
                        <option value="Verbesserungsvorschläge">Verbesserungsvorschläge</option>
                        <option value="Sonstiges">Sonstiges</option>
                    </select>
                    <label for="kontakt_nachricht">Nachricht<sup>*</sup></label>
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
                <a type="button" href="../index.php">Zurück zur Startseite</a>
            <?php } ?>
        </div>

    </div>
    <?php include "templates/footer.php" ?>
    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10395.27343345292!2d9.141197391764958!3d49.35558641942753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4797f5661b08128f%3A0x249e45c0f7f2c88f!2sDHBW%20Mosbach!5e0!3m2!1sde!2sde!4v1658668624651!5m2!1sde!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</body>

</html>