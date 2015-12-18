<?php
/**
 * Created by PhpStorm.
 * User: Ignatenkov Nikita
 * Site: http://ignatenkovnikita.ru/
 * Date: 16.12.15
 * Time: 18:32
 */

namespace ignatenkovnikita\beansupermon\controllers;


use ignatenkovnikita\beansupermon\models\Server;
use Yii;
use yii\web\Controller;

class ServerController extends Controller
{

    public function actionView()
    {
        $model = new Server();
        return $this->render('view', compact('model'));
    }

}
