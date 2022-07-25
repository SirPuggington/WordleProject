<!doctype html>

<html lang="de">

<head>
    <meta charset="UTF-8">

    <title>Kontakt</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/menu.css">

</head>

<body>
    <?php include "templates/header.php" ?>
    <?php include "templates/help.php" ?>

    <div class="content-wrapper">
        <div class="form">
            <h1>Kontakt</h1>

            <?php if (!isset($_POST["submitted"])) { ?>


                <form action="kontakt.php" method="post" id="contact-form">

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
                <form action="../index.php">
                    <img src="../assets/images/Danke.png" alt="Danke">
                    <h3>Vielen Dank für ihre Nachricht <?php echo $_POST["kontakt_name"]; ?>!</h3>
                    <p>Wir setzen uns schnellstmöglich mit Ihnen in Verbindung.</p>
                    <br>
                    <button type="submit">Zurück zur Startseite</button>

                </form>
                <br><br>


            <?php } ?>
        </div>
        <div>
            <h2>Hier finden sie uns</h2>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10395.27343345292!2d9.141197391764958!3d49.35558641942753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4797f5661b08128f%3A0x249e45c0f7f2c88f!2sDHBW%20Mosbach!5e0!3m2!1sde!2sde!4v1658668624651!5m2!1sde!2sde" width="600" height="450" style="border:0;"></iframe>
            </div>
        </div>


    </div>
    <?php include "templates/footer.php" ?>

</body>

</html>