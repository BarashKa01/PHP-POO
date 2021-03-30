<?php

require 'form.php';
require 'text.php';

$form = new Form($_POST);
Text::publicWithZero(9);
?>

<form action="#" method="post">
    <?php
        echo($form->input('username'));
        echo($form->input('password'));
        echo($form->submit());
    ?>
</form>