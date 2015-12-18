<?php
/**
 * Created by PhpStorm.
 * User: Ignatenkov Nikita
 * Site: http://ignatenkovnikita.ru/
 * Date: 17.12.15
 * Time: 15:28
 */

namespace ignatenkovnikita\beansupermon\models;


use Yii;
use yii\base\Component;

/**
 * @property mixed ident
 */
class Process extends Component
{
    public $description;
    public $pid;
    public $stderrLogfile;
    public $stop;
    public $logfile;
    public $exitstatus;
    public $spawnerr;
    public $now;
    public $group;
    public $name;
    public $statename;
    public $start;
    public $state;
    public $stdoutLogfile;


    public function init()
    {
        parent::init();

        $stat = Yii::$app->controller->module->supervisor->getProcessInfo($this->ident);

        $this->description = $stat['description'];
        $this->pid = $stat['pid'];
        $this->stderrLogfile = $stat['stderr_logfile'];
        $this->stop = $stat['stop'];
        $this->logfile = $stat['logfile'];
        $this->exitstatus = $stat['exitstatus'];
        $this->spawnerr = $stat['spawnerr'];
        $this->now = $stat['now'];
        $this->group = $stat['group'];
        $this->name = $stat['name'];
        $this->statename = $stat['statename'];
        $this->start = $stat['start'];
        $this->state = $stat['state'];
        $this->stdoutLogfile = $stat['stdout_logfile'];
    }

    public function getIdent()
    {
        return $this->group . ':' . $this->name;
    }


}
