<!-- Меню -->
<?php
require_once('o.php');
$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'Контакты', 'href' => 'index.php?id=contact'],
    ['link' => 'О нас', 'href' => 'index.php?id=about'],
    ['link' => 'Он-лайн тест', 'href' => 'test/index.php'],
    ['link' => 'Гостевая книга', 'href' => 'index.php?id=gbook'],
    ['link' => 'Магазин', 'href' => 'eshop/catalog.php']
];
drawMenu($leftMenu);
