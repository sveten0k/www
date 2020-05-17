<?php

class UserController implements IController
{
    public function helloAction()
    {
        $fc = FrontController::getInstance();
        $model = new FileModel();
        $model->name = $fc->getParams()["name"];
        $output = $model->render(USER_DEFAULT_FILE);
        $fc->setBody($output);
    }

    public function listAction()
    {
        $fc = FrontController::getInstance();
        $model = new FileModel();
        $model->list=unserialize(file_get_contents(USER_DB));
        $output = $model->render(USER_LIST_FILE);
        $fc->setBody($output);
    }

 /* public function roleAction()
    {
        $fc = FrontController::getInstance();
        $model = new FileModel();
        $model->list=unserialize(file_get_contents(USER_DB));
        $output = $model->render(USER_ROLE_FILE);
        $fc->setBody($output);
    }*/
}