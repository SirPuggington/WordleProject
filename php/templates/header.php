<header>
    <nav class="nav-bar">
        <div id="nav-container">
            <div id="nav-burger">
                <input id="input-burger" type="checkbox" />

                <span></span>
                <span></span>
                <span></span>

            </div>


            <?php
            $file = $_SERVER['SCRIPT_FILENAME'];
            $file = substr($file, -9, -4);
            if (($file) == "index") {
            ?>

                <a href="#"><img class="logo" src="assets/images/logo.png"></a>
                <ul class="nav-items">
                    <li><a href="#" class="active">Startseite </a></li>
                    <li><a href="php/ueber_wordle.php">Über Wordle</a></li>
                    <li><a href="php/kontakt.php">Kontakt</a></li>
                    <li><a href="php/team.php">Team</a></li>
                </ul>

            <?php } else { ?>


                <a href="../"><img class="logo" src="../assets/images/logo.png"></a>
                <ul class="nav-items">
                    <li><a href="../">Startseite</a></li>
                    <li><a href="ueber_wordle.php" class=<?php if ($_SERVER['REQUEST_URI'] == '/wordlemania/php/ueber_wordle.php') {
                                                                echo "active";
                                                            } ?>>Über Wordle</a></li>
                    <li><a href="kontakt.php" class=<?php if ($_SERVER['REQUEST_URI'] == '/wordlemania/php/kontakt.php') {
                                                        echo "active";
                                                    } ?>>Kontakt</a></li>
                    <li><a href="team.php" class=<?php if ($_SERVER['REQUEST_URI'] == '/wordlemania/php/team.php') {
                                                        echo "active";
                                                    } ?>>Team</a></li>

                <?php } ?>


                </ul>
        </div>

    </nav>

    <script>
        document.getElementById("input-burger").addEventListener("click", toggleBurgerMenu);

        function toggleBurgerMenu() {
            var input = document.getElementById("input-burger");
            var menu = document.querySelector(".nav-items");
            if (input.checked == true) {
                menu.classList.add("active");
            } else {
                menu.classList.remove("active");
            }
        }
    </script>

</header>