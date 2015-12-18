<?php

namespace ignatenkovnikita\beansupermon\controllers;

use ignatenkovnikita\beansupermon\models\Server;
use ignatenkovnikita\beansupermon\models\ServerList;
use ignatenkovnikita\beansupermon\models\StatBeanstalk;
use ignatenkovnikita\beansupermon\models\Supervisor;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $supervisor = new Supervisor();
        $server = new Server();
        return $this->render('index', compact('server', 'supervisor'));
    }
}
