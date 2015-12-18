<?php
/**
 * Created by PhpStorm.
 * User: Ignatenkov Nikita
 * Site: http://ignatenkovnikita.ru/
 * Date: 17.12.15
 * Time: 15:09
 */

namespace ignatenkovnikita\beansupermon\models;


use Yii;
use yii\base\Component;

class Supervisor extends Component
{
    public $supervisorVersion;
    public $state;
    public $identification;
    public $pid;

    public function init()
    {
        parent::init();
        $supervisor = Yii::$app->controller->module->supervisor;
        $this->identification = $supervisor->getIdentification();
        $this->state = $supervisor->getState()['statename'];
        $this->pid = $supervisor->getPid();
    }

    public function getStatsProcess()
    {
        $list = [];
        foreach ($this->getListProcesses() as $process) {

            $list[] = new Process(['name' => $process['name'], 'group' => $process['group']]);

        }

        return $list;
    }

    public function getListProcesses()
    {
        return Yii::$app->controller->module->supervisor->getAllProcessInfo();
    }

}
