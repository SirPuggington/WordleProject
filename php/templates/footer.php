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



<footer>
    <nav class="nav-footer">
        <div id="footer-container">
            <img class="logo-footer" src="assets/images/Wordle-Logo-sw.png" alt="Logo-Footer"><br>
            
            <?php 
                $file = $_SERVER['SCRIPT_FILENAME'];
                $file=substr($file,-9,-4);
                if(($file) == "index"){ 
                    ?>

            <a href="php/datenschutz.php">Datenschutz</a>
            <a href="php/impressum.php">Impressum</a>
            
            <?php }else{ ?>

            <a href="datenschutz.php">Datenschutz</a>
            <a href="impressum.php">Impressum</a>

            <?php } ?>
            
        </div>
    </nav>
    <div class="copy-right"> <small>© INF21B</small></div>
</footer>