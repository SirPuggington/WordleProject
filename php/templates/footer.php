<footer>
    <nav class="nav-footer">
        <div id="footer-container">


            <?php
            $file = $_SERVER['SCRIPT_FILENAME'];
            $file = substr($file, -9, -4);
            if (($file) == "index") {
            ?>
                <img class="logo-footer" src="assets/images/Wordle-Logo-sw.png" alt="Logo-Footer"><br>
                <a href="php/datenschutz.php">Datenschutz</a>
                <a href="php/impressum.php">Impressum</a>

            <?php } else { ?>

                <img class="logo-footer" src="../assets/images/Wordle-Logo-sw.png" alt="Logo-Footer"><br>
                <a href="datenschutz.php">Datenschutz</a>
                <a href="impressum.php">Impressum</a>

            <?php } ?>

        </div>
    </nav>
    <div class="copy-right"> <small>© INF21B</small></div>
</footer>