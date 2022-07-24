<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Team Wettbewerb</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/menu.css">

    <link rel="shortcut icon" type="image/x-icon" href="../favicon2.ico">
</head>

<body>

    <?php include "templates/header.php" ?>
    <?php include "templates/help.php" ?>


    <main class="content-wrapper winner">

        <pre>
 _       _______   ___   ____________ 
| |     / /  _/ | / / | / / ____/ __ \
| | /| / // //  |/ /  |/ / __/ / /_/ /
| |/ |/ // // /|  / /|  / /___/ _, _/ 
|__/|__/___/_/ |_/_/ |_/_____/_/ |_| 
        </pre>
        <img id="winner-img" src='../assets/images/team/<?php echo $_POST["fav_img"] ?>.png' alt='Gewinner-Bild'>
        <h3><?php echo $_POST["fav_quote"] ?></h3>

    </main>
    <?php include "templates/footer.php" ?>


</body>

</html>