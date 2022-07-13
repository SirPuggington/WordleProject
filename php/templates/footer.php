<footer>

<?php 
$file = $_SERVER['SCRIPT_FILENAME'];
$file=substr($file,-9,-4);
if(($file) == "index"){ ?>

<nav>
    <a href="php/datenschutz.php">Datenschutz</a>
    <a href="php/impressum.php">Impressum</a>
</nav>

<?php }else{ ?>

<nav>
    <a href="datenschutz.php">Datenschutz</a>
    <a href="impressum.php">Impressum</a>
</nav>

<?php } ?>

</footer>