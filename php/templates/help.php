<?php $file = $_SERVER['SCRIPT_FILENAME'];
$file = substr($file, -9, -4); ?>

<div id="help-div">
    <a href="<?php if ($file == "index") {
                    echo "php/";
                } ?>kontakt.php"><img src="<?php if ($file != "index") {
                                                                                    echo "../";
                                                                                } ?>assets/images/help.svg" alt="Help Icon"></a>
</div>