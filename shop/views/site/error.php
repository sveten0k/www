<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<!-- banner -->
<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>
    <div class="w3l_banner_nav_right">
        <section class="slider">
            <div class="flexslider">
                <div style="padding: 0 1em">
                    <h2><?= Html::encode($this->title) ?></h2>
                    <div class="alert alert-danger">
                        <?= nl2br(Html::encode($message)) ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="clearfix"></div>
</div>
<!-- banner -->
