<!doctype html>

<html lang="de">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon2.ico">
    <title>Team</title>
</head>

<?php
$quote1 = "Der Unterschied zwischen Dummheit und Genialität ist, Genialität hat ihre Grenzen.";
$quote2 = "Wenn Du dem Menschen, der für Deine meisten Probleme verantwortlich ist, einen Tritt in den Hintern verpassen könntest, könntest Du einen Monat nicht sitzen.";
$quote3 = "Auch die besessensten Vegetarier beissen nicht gern ins Gras";
$quote4 = "Bankraub ist eine Unternehmung von Dilettanten. Wahre Profis gründen eine Bank.";
$quote5 = "Auch der dumme hat manchmal einen gescheiten Gedanken. Er merkt es nur nicht.";

$img1 = "<img src='../assets/images/team/img1.png' alt='TEAMBILD'>";
$img2 = "<img src='../assets/images/team/img2.png' alt='TEAMBILD'>";
$img3 = "<img src='../assets/images/team/img3.png' alt='TEAMBILD'>";
$img4 = "<img src='../assets/images/team/img4.png' alt='TEAMBILD'>";
$img5 = "<img src='../assets/images/team/img5.png' alt='TEAMBILD'>";
?>

<body>
    <?php include "templates/header.php" ?>

    <main class="content-wrapper">


        <div>
            <?php echo $img1 ?>
            <details>
                <summary>
                    123456789
                </summary>
                <blockquote>

                    <?php echo $quote1 ?>

                </blockquote>
            </details>

        </div>
        <div>
            <?php echo $img2 ?>
            <details>
                <summary>
                    123456789
                </summary>
                <p>

                    <?php echo $quote2 ?>

                </p>
            </details>

        </div>
        <div>
            <?php echo $img3 ?>
            <details>
                <summary>
                    123456789
                </summary>
                <p>

                    <?php echo $quote3 ?>

                </p>
            </details>

        </div>
        <div>
            <?php echo $img4 ?>
            <details>
                <summary>
                    123456789
                </summary>
                <p>

                    <?php echo $quote4 ?>

                </p>
            </details>

        </div>
        <div>
            <?php echo $img5 ?>
            <details>
                <summary>
                    123456789
                </summary>
                <p>

                    <?php echo $quote5 ?>

                </p>
            </details>

        </div>


        <section>
            <h2>Team Wettbewerb</h2>
            <form action="POST">
                <h3>Wer hat das beste Bild?</h3>
                <table>
                    <tr>
                        <td>
                            <input id="img1" type="radio" name="fav_img" value="img1">
                        </td>
                        <td>
                            <label for="img1"> <?php echo $img1 ?></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="img2" type="radio" name="fav_img" value="img2">
                        </td>
                        <td>
                            <label for="img2"><?php echo $img2 ?></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="img3" type="radio" name="fav_img" value="img3">
                        </td>
                        <td>
                            <label for="img3"><?php echo $img3 ?></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="img4" type="radio" name="fav_img" value="img4">
                        </td>
                        <td>
                            <label for="img4"><?php echo $img4 ?></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="img5" type="radio" name="fav_img" value="img5">
                        </td>
                        <td>
                            <label for="img5"><?php echo $img5 ?></label>
                        </td>
                    </tr>
                </table>

                <h3>Wer hat das beste Zitat?</h3>
                <input id="quote1" type="radio" name="fav_quote" value="quote1">
                <label for="quote1"><?php echo $quote1 ?></label>
                <input id="quote2" type="radio" name="fav_quote" value="quote2">
                <label for="quote2"><?php echo $quote2 ?></label>
                <input id="quote3" type="radio" name="fav_quote" value="quote3">
                <label for="quote3"><?php echo $quote3 ?></label>
                <input id="quote4" type="radio" name="fav_quote" value="quote4">
                <label for="quote4"><?php echo $quote4 ?></label>
                <input id="quote5" type="radio" name="fav_quote" value="quote5">
                <label for="quote5"><?php echo $quote5 ?></label>

                <input type="button" value="submit">

        </section>

    </main>


    <?php include "templates/footer.php" ?>
</body>

</html>