<?php
/**
 * Created by PhpStorm.
 * User: Ignatenkov Nikita
 * Site: http://ignatenkovnikita.ru/
 * Date: 16.12.15
 * Time: 17:18
 */

namespace ignatenkovnikita\beansupermon\models;


use Yii;
use yii\base\Component;
use yii\base\Model;
use yii\helpers\ArrayHelper;

class Server extends Component
{
    public $name;
    public $ip;
    public $port;
    public $currentConnections = 0;
    public $currentJobsBuried = 0;
    public $currentJobsDelayed = 0;
    public $currentJobsReady = 0;
    public $currentJobsReserved = 0;
    public $currentJobsUrgent = 0;
    public $currentTubes = 0;

    public static function getServer()
    {
        return new self(Yii::$app->controller->module->server);
    }

    public function init()
    {
        parent::init();

        $stat = Yii::$app->controller->module->beanstalkClient->stats();
        $this->name = 'Default Beanstalk';
        $this->currentConnections = $stat['current-connections'];
        $this->currentJobsBuried = $stat['current-jobs-buried'];
        $this->currentJobsDelayed = $stat['current-jobs-delayed'];
        $this->currentJobsReady = $stat['current-jobs-ready'];
        $this->currentJobsReserved = $stat['current-jobs-reserved'];
        $this->currentJobsUrgent = $stat['current-jobs-urgent'];
        $this->currentTubes = $stat['current-tubes'];

        //$stats = Yii::$app->controller->module->beanstalkClient->statsTube($this->name);
    }

    public function getStatsTube()
    {
        $list = [];
        foreach ($this->getListTube() as $tubename) {

            $list[] = new Tube(['name' => $tubename]);

        }

        return $list;
    }

    public function getListTube()
    {
        return Yii::$app->controller->module->beanstalkClient->listTubes();
    }


}
