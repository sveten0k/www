<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$templ = $twig->loadTemplate('main.html');
echo $templ->render(array());


