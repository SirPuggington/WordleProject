<!doctype html>
<html lang="de">

<head>
    <meta charset="UTF-8">

    <title>Wordle</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/menu.css">

    <link rel="script" href="js/main.js">
    <link rel="shortcut icon" type="image/x-icon" href="favicon2.ico">


</head>

<body>
    <?php include "php/templates/header.php" ?>
    <?php include "php/templates/help.php" ?>

    <main class="content-wrapper">
        <div class="flex-container">
            <div class="flex-child">
                <h1 id="game-title">Hello Worldle</h1>

                <div id="game-board">

                </div>
                <div id="keyboard-cont">
                    <div class="first-row">
                        <button class="keyboard-button">q</button>
                        <button class="keyboard-button">w</button>
                        <button class="keyboard-button">e</button>
                        <button class="keyboard-button">r</button>
                        <button class="keyboard-button">t</button>
                        <button class="keyboard-button">y</button>
                        <button class="keyboard-button">u</button>
                        <button class="keyboard-button">i</button>
                        <button class="keyboard-button">o</button>
                        <button class="keyboard-button">p</button>
                    </div>
                    <div class="second-row">
                        <button class="keyboard-button">a</button>
                        <button class="keyboard-button">s</button>
                        <button class="keyboard-button">d</button>
                        <button class="keyboard-button">f</button>
                        <button class="keyboard-button">g</button>
                        <button class="keyboard-button">h</button>
                        <button class="keyboard-button">j</button>
                        <button class="keyboard-button">k</button>
                        <button class="keyboard-button">l</button>
                    </div>
                    <div class="third-row">
                        <button class="keyboard-button">Del</button>
                        <button class="keyboard-button">z</button>
                        <button class="keyboard-button">x</button>
                        <button class="keyboard-button">c</button>
                        <button class="keyboard-button">v</button>
                        <button class="keyboard-button">b</button>
                        <button class="keyboard-button">n</button>
                        <button class="keyboard-button">m</button>
                        <button class="keyboard-button">Enter</button>
                    </div>
                </div>
            </div>

            <article class="flex-child">
                <h2>Anleitung:</h2>
                <ol>
                    <li>Gib ein <span class="red">englisches</span> Wort mit 5 Buchstaben ein</li>
                    <li>Bestätige deine Eingabe mit der Eingabetaste</li>
                    <li>Die Buchstaben verändern ihre Farbe um dir Hinweise zu geben</li>
                </ol>
                <h3>Was bedeuten die Farben?</h3>
                <dl>
                    <dt>Grau</dt>
                    <dd>der Buchstabe kommt <span class="red">nicht</span> im gesuchten Wort vor</dd>
                    <dt>Gelb</dt>
                    <dd>der Buchstabe kommt im gesuchten Wort vor, aber an einer anderen Stelle</dd>
                    <dt>Grün</dt>
                    <dd>der Buchstabe kommt im gesuchten Wort vor und ist an der korrekten Stelle</dd>
                </dl>

                <h2>Gemütliche Musik zum Spielen</h2>

                <div class="ambient">
                    <audio controls>
                        <source src="assets/audio/ambient.mp3">
                        <source src="assets/audio/ambient2.mp3">
                    </audio>
                </div>
            </article>




        </div>

    </main>


    <?php include "php/templates/footer.php" ?>
    <script src="js/wordle.js" type="module"></script>

</body>

</html>