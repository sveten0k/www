<?php
header("Content-Type: text/html;charset=utf-8");
$dom = new DOMDocument();
$dom->load("catalog.xml");
$root = $dom->documentElement;
/*echo $root->nodeType;*/
$books = $root->childNodes;
/*foreach ($books as $book){
    echo $book->textContent;
    echo "<hr>";
}*/
?>
<html>

<head>
    <title>Каталог</title>
</head>

<body>
<h1>Каталог книг</h1>
<table border="1" width="100%">
    <tr>
        <th>Автор</th>
        <th>Название</th>
        <th>Год издания</th>
        <th>Цена, руб</th>
    </tr>
    <?php
    //Парсинг
    foreach ($books as $book) {
        if ($book->nodeType == 1) {
            echo "<tr>";
            foreach ($book->childNodes as $item) {
                if ($item->nodeType == 1) {
                    echo "<td>{$item->textContent}</td>";
                }
            }
            echo "</tr>";
        }
    }
    ?>
</table>
</body>

</html>