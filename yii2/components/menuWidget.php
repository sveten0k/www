<?php
namespace app\components;

use app\models\Articles;
use yii\base\Widget;
use yii\helpers\Html;

class menuWidget extends Widget
{


    public function run()
    {
        $articles = Articles::find()->where(['visible' => 1])->andWhere('id != 1')->all();
        return $this->render('menu', ['articles' => $articles]);
    }
}