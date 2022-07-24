<?php $file = $_SERVER['SCRIPT_FILENAME'];
$file = substr($file, -9, -4); ?>

<div id="help-div">
    <a href="mailto:humanbeeing@live.de"><img src="<?php if ($file != "index") {
                                                        echo "../";
                                                    } ?>assets/images/help.svg" alt="Help Icon"></a>
</div>