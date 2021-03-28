<?php

require 'form.php';

$form = new Form(array(
  'username' => 'Artur'
));

echo($form->input('username'));
echo($form->input('password'));

