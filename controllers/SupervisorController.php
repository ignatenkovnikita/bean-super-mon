<?php
/**
 * Created by PhpStorm.
 * User: Ignatenkov Nikita
 * Site: http://ignatenkovnikita.ru/
 * Date: 17.12.15
 * Time: 15:23
 */

namespace ignatenkovnikita\beansupermon\controllers;


use ignatenkovnikita\beansupermon\models\Supervisor;
use Yii;
use yii\web\Controller;

class SupervisorController extends Controller
{
    public function actionView()
    {
        //var_dump(Yii::$app->controller->module->supervisor->getProcessInfo('communication:communication-0'));
        $model = new Supervisor();
        return $this->render('view', compact('model'));
    }

    public function actionTailLog($name)
    {
        $out = Yii::$app->controller->module->supervisor->listMethods();
        $out2 = Yii::$app->controller->module->supervisor->tailProcessStdoutLog('export-user:export-user-0', 0, 500);
        var_dump($out2);
        var_dump($out);

    }

}
