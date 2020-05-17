<?php


namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    public $my_var;

    public function __construct($id, $module, array $config = [])
    {
        $this->my_var = 123;
        $this->view->params['test']='Test params';
        $this->view->params['test2']='Test params';
        parent::__construct($id, $module, $config);
    }
}