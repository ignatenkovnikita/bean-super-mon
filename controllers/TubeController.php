<?php
/**
 * Created by PhpStorm.
 * User: Ignatenkov Nikita
 * Site: http://ignatenkovnikita.ru/
 * Date: 17.12.15
 * Time: 13:04
 */

namespace ignatenkovnikita\beansupermon\controllers;


use ignatenkovnikita\beansupermon\models\Tube;
use yii\web\Controller;

class TubeController extends Controller
{

    public function actionView($tubeName)
    {
        $model = $this->loadModel($tubeName);
        var_dump($model);
        return $this->render('view', compact('model'));
    }

    public function  loadModel($id)
    {
        return new Tube(['name' => $id]);
    }

}
