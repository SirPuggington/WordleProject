<header>
    <nav class="nav-bar">
        <div id="nav-container">

            <?php
            $file = $_SERVER['SCRIPT_FILENAME'];
            $file = substr($file, -9, -4);
            if (($file) == "index") {
            ?>

                <a href="#"><img class="logo" src="assets/images/Wordle-Logo.png"></a>
                <ul class="nav-items">
                    <li><a href="#">Startseite</a></li>
                    <li><a href="php/über_wordle.php">Über Wordle</a></li>
                    <li><a href="php/kontakt.php">Kontakt</a></li>
                </ul>

            <?php } else { ?>


                <a href="../"><img class="logo" src="../assets/images/Wordle-Logo.png"></a>
                <ul class="nav-items">
                    <li><a href="../">Startseite</a></li>
                    <li><a href="über_wordle.php">Über Wordle</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>

                <?php } ?>


                </ul>
        </div>

    </nav>
</header>