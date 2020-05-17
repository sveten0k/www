<?php

namespace app\controllers;

use app\models\Country;
use app\models\EntryForm;
use yii\bootstrap\ActiveForm;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class TestController extends AppController

{
    public function actionIndex($alert='',$name = 'Guest', $age = 25)
    {
        $this->layout = 'test';
        $this->view->params['test'] = 'Test params';
        $this->view->title = 'Test Page';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'мета-описание...'], 'description');

        switch ($alert){
            case 'error':
                \Yii::$app->session->setFlash('error','error');
                break;
            case 'success':
                \Yii::$app->session->setFlash('success','OK');
                break;
            case 'info':
                \Yii::$app->session->setFlash('info','info');
                break;
            case 'warning':
                \Yii::$app->session->setFlash('warning','warning');
                break;
            default:
                \Yii::$app->session->setFlash('danger','danger');
        }

        $model = new EntryForm();

        if ($model->load(\Yii::$app->request->post())){
            if ($model->validate()){
                \Yii::$app->session->setFlash('success','OK');
                return $this->refresh();
            }else{
                \Yii::$app->session->setFlash('error','Error');
            }

        /*  $model->load(\Yii::$app->request->post());
          if (\Yii::$app->request->isAjax) {
              \Yii::$app->response->format = Response::FORMAT_JSON;
              if ($model->validate()){
                  return ['message'=>'ok'];
              }else{
                  return ActiveForm::validate($model);
              }
              return ActiveForm::validate($model);
          }*/
       /* if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            if (\Yii::$app->request->isPjax) {
                \Yii::$app->session->setFlash('success', 'Данные приняты через Pjax');
                $model = new EntryForm();
            } else {
                \Yii::$app->session->setFlash('success', 'Данные приняты стандартно');
                return $this->refresh();
            }*/
        }
        return $this->render('index', compact('model'));
    }

    public function actionView()
    {
        $this->layout = 'test';
        $this->view->title = 'Работа с моделями';
        $countries = Country::find()->all();

        /*$countries = Country::find()->where("population<100000000 AND code <> 'AU'")->all();*/

        /* $countries = Country::find()->where("population< :population AND code <> :code", [':code' => 'AU', ':population' => 100000000])->all();*/

        /* $countries = Country::find()->where([
             'code' => ['DE', 'FR', 'GB'],
             'status' => 1,
         ])->all();*/
        /*   $countries = Country::find()->where(['like','name','ni'])->all();*/
        /* $countries = Country::find()->orderBy('name ASC')->all();*/
        /*$countries = Country::find()->count();*/

        //$countries = Country::findAll(['DE', 'FR', 'GB']);

        //$countries = Country::findOne('BR');

        return $this->render('view', ['countries' => $countries]);
    }

    public function actionMyTest()
    {
        return $this->render('my-test');
    }


    public function actionCreate()
    {
        $this->layout = 'test';
        $this->view->title = 'Create';

        $country = new Country();
        if (\Yii::$app->request->isAjax) {
            $country->load(\Yii::$app->request->post());
            \Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($country);
        }
        /*        $country->code = 'UA';
                $country->name = 'Ukraine';
                $country->population = 41840000;
                $country->status = 1;*/
        if ($country->load(\Yii::$app->request->post()) && $country->save()) {
            \Yii::$app->session->setFlash('success', 'OK');
            return $this->refresh();
        }

        return $this->render('create', ['country' => $country]);

    }
    public function actionUpdate(){
        $this->layout = 'test';
        $this->view->title = 'Update';
        $country= Country::findOne('UA');
        if (!$country){
            throw new NotFoundHttpException('Country not found');
        }
        if ($country->load(\Yii::$app->request->post()) && $country->save()) {
            \Yii::$app->session->setFlash('success', 'OK');
            return $this->refresh();
        }
        return $this->render('update', ['country' => $country]);
    }
    public function actionDelete($code){
        $this->layout = 'test';
        $this->view->title = 'Delete';

        $country= Country::findOne($code);
        if ($country){
            if (false!==$country->delete()){
                \Yii::$app->session->setFlash('success', 'OK');
            }else{
                \Yii::$app->session->setFlash('error', 'Error');
            }
        }
        return $this->render('delete', ['country' => $country]);
    }

}