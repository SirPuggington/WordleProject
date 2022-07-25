<!doctype html>

<html lang="de">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/menu.css">

    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <title>Team</title>
</head>

<?php
$quote1 = "Der Unterschied zwischen Dummheit und Genialität ist, Genialität hat ihre Grenzen.";
$quote2 = "Wenn Du dem Menschen, der für Deine meisten Probleme verantwortlich ist, einen Tritt in den Hintern verpassen könntest, könntest Du einen Monat nicht sitzen.";
$quote3 = "Auch die besessensten Vegetarier beissen nicht gern ins Gras";
$quote4 = "Bankraub ist eine Unternehmung von Dilettanten. Wahre Profis gründen eine Bank.";
$quote5 = "Auch der dumme hat manchmal einen gescheiten Gedanken. Er merkt es nur nicht.";

$img1 = "<img src='../assets/images/team/img1.png' alt='Teambild 1'>";
$img2 = "<img src='../assets/images/team/img2.png' alt='Teambild 2'>";
$img3 = "<img src='../assets/images/team/img3.png' alt='Teambild 3'>";
$img4 = "<img src='../assets/images/team/img4.png' alt='Teambild 4'>";
$img5 = "<img src='../assets/images/team/img5.png' alt='Teambild 5'>";
?>

<body>
    <?php include "templates/header.php" ?>
    <?php include "templates/help.php" ?>

    <main class="content-wrapper">
        <h1>Das Team</h1>
        <div class="team-member padding-50">
            <div class="grid-container padding-25">
                <div class="grid-child">
                    <?php echo $img1 ?>
                </div>
                <div class="grid-child">
                    <details>

                        <summary>
                            9720025
                        </summary>


                        <blockquote>

                            <?php echo $quote1 ?>

                        </blockquote>
                    </details>
                </div>
            </div>

            <div class="grid-container padding-25">
                <div class="grid-child">
                    <?php echo $img2 ?>
                </div>
                <div class="grid-child">
                    <details>

                        <summary>
                            5911189
                        </summary>


                        <blockquote>

                            <?php echo $quote2 ?>

                        </blockquote>
                    </details>
                </div>
            </div>

            <div class="grid-container padding-25">
                <div class="grid-child">
                    <?php echo $img3 ?>
                </div>
                <div class="grid-child">
                    <details>

                        <summary>
                            1784535
                        </summary>


                        <blockquote>

                            <?php echo $quote3 ?>

                        </blockquote>
                    </details>
                </div>
            </div>

            <div class="grid-container padding-25">
                <div class="grid-child">
                    <?php echo $img4 ?>
                </div>
                <div class="grid-child">
                    <details>

                        <summary>
                            5536350
                        </summary>


                        <blockquote>

                            <?php echo $quote4 ?>

                        </blockquote>
                    </details>
                </div>
            </div>

            <div class="grid-container padding-25">
                <div class="grid-child">
                    <?php echo $img5 ?>
                </div>
                <div class="grid-child">
                    <details>

                        <summary>
                            2150424
                        </summary>


                        <blockquote>

                            <?php echo $quote5 ?>

                        </blockquote>
                    </details>
                </div>
            </div>

            <br><br><br>
            <hr>
        </div>


        <section>
            <h2>Team Wettbewerb</h2>



            <form action="winner.php" method="POST">

                <h3>Wer hat das beste Bild?</h3>
                <div style="overflow-x:auto;">

                    <table class="team-form">
                        <tr>
                            <td>
                                <input id="img1" type="radio" name="fav_img" value="img1">
                            </td>
                            <td>
                                <input id="img2" type="radio" name="fav_img" value="img2">
                            </td>
                            <td>
                                <input id="img3" type="radio" name="fav_img" value="img3">
                            </td>
                            <td>
                                <input id="img4" type="radio" name="fav_img" value="img4">
                            </td>
                            <td>
                                <input id="img5" type="radio" name="fav_img" value="img5" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="img1"> <?php echo $img1 ?></label>
                            </td>
                            <td>
                                <label for="img2"><?php echo $img2 ?></label>
                            </td>
                            <td>
                                <label for="img3"><?php echo $img3 ?></label>
                            </td>
                            <td>
                                <label for="img4"><?php echo $img4 ?></label>
                            </td>
                            <td>
                                <label for="img5"><?php echo $img5 ?></label>
                            </td>

                    </table>
                </div>

                <h3>Wer hat das beste Zitat?</h3>
                <div class="quotes">
                    <input id="quote1" type="radio" name="fav_quote" value="<?php echo $quote1 ?>" required>
                    <label for="quote1"><?php echo $quote1 ?></label><br><br>
                    <input id="quote2" type="radio" name="fav_quote" value="<?php echo $quote2 ?>">
                    <label for="quote2"><?php echo $quote2 ?></label><br><br>
                    <input id="quote3" type="radio" name="fav_quote" value="<?php echo $quote3 ?>">
                    <label for="quote3"><?php echo $quote3 ?></label><br><br>
                    <input id="quote4" type="radio" name="fav_quote" value="<?php echo $quote4 ?>">
                    <label for="quote4"><?php echo $quote4 ?></label><br><br>
                    <input id="quote5" type="radio" name="fav_quote" value="<?php echo $quote5 ?>">
                    <label for="quote5"><?php echo $quote5 ?></label><br><br>

                </div>




                <button type="submit">Senden</button>
            </form>

        </section>

    </main>


    <?php include "templates/footer.php" ?>
</body>

</html>