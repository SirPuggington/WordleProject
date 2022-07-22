<!doctype html>
<html lang="de">

<head>
    <meta charset="UTF-8">

    <title>Wordle</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="script" href="js/main.js">
    <link rel="shortcut icon" type="image/x-icon" href="favicon2.ico">


</head>

<body>
    <?php include "php/templates/header.php" ?>
    <main class="content-wrapper">


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




    </main>


    <?php include "php/templates/footer.php" ?>
    <script src="js/wordle.js" type="module"></script>

</body>

</html>