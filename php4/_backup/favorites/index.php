<?php 
  include_once 'classes/Favorites.class.php';
  $fav=new Favorites();
  $links=$fav->getFavorites("getLinksItems");
  $arts=$fav->getFavorites("getArticlesItems");
  $apps=$fav->getFavorites("getAppsItems");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Наши рекомендации</title>
  <meta charset="utf-8" />
  <style>
    header {
      border-bottom: 1px solid black;
      text-align: center;
      width: 80%
    }
    
    div#a,
    div#b,
    div#c {
      width: 30%;
      height: 200px;
      float: left
    }
  </style>
</head>

<body>
  <header>
    <h1>Мы рекомендуем</h1>
  </header>
  <div id='a'>
    <h2>Полезные сайты</h2>
    <ul>
         <!--Список сайтов -->
        <?php
      foreach ($links as $link){
          foreach ($link as $item)
              echo "<li><a href='{$item[1]}'>{$item[0]}</a></li>";
      }
      ?>
    </ul>
  </div>
  <div id='b'>
    <h2>Полезные приложения</h2>
    <ul>
       <!--Список приложений -->
      <?php
      foreach ($apps as $app){
          foreach ($app as $item)
              echo "<li><a href='{$item[1]}'>{$item[0]}</a></li>";
      }
      ?>
    </ul>
  </div>
  <div id='c'>
    <h2>Полезные статьи</h2>
    <ul>
      <!-- Список статей -->
        <?php
        foreach ($arts as $art){
            foreach ($art as $item)
                echo "<li><a href='{$item[1]}'>{$item[0]}</a></li>";
        }
        ?>
    </ul>
  </div>
</body>

</html>