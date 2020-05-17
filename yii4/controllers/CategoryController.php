<?php


namespace app\controllers;


use app\models\Category;
use yii\web\NotFoundHttpException;

class CategoryController extends AppController
{
    public function actionIndex()
    {
        $this->view->title = 'Categories';
        $categories = Category::find()->all();
        return $this->render('index', ['categories' => $categories]);
    }

    public function actionView($alias = null)
    {
        $category = Category::findOne(['alias'=>$alias]);
        if (!$category){
            throw new NotFoundHttpException('Not found');
        }
        $products = $category->getProducts()->all();
        $this->view->title = "Category:{$category->title}";
        return $this->render('view', [
            'category' => $category,
            'products' =>$products,
        ]);
    }

}