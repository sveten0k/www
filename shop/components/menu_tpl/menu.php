<?php

/* @var $category array */

?>
<li <?=isset($category['children'])?'class="dropdown"':''?>>
    <?=\yii\helpers\Html::a(
            $category['title'],
            ['category/view', 'id' => $category['id']],
            [
                'class' => isset($category['children'])?'dropdown-toggle' :'',
                'data-toggle' => isset($category['children'])?'dropdown' :'',
            ]
    )?>
    <?php if (isset($category['children'])):?>
        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
            <div class="w3ls_vegetables">
                <ul>
                    <?= $this->getMenuHtml($category['children']) ?>
                </ul>
            </div>
        </div>
    <?php endif;?>

</li>


