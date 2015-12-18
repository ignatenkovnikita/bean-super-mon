<?php
/**
 * Created by PhpStorm.
 * User: Ignatenkov Nikita
 * Site: http://ignatenkovnikita.ru/
 * Date: 16.12.15
 * Time: 17:18
 */

namespace ignatenkovnikita\beansupermon\models;


use Pheanstalk\Pheanstalk;
use Pheanstalk\Response\ArrayResponse;
use Yii;
use yii\base\Component;

class Tube extends Component
{
    public $name;
    public $currentJobsUrgent;
    public $currentJobsReady;
    public $currentJobsReserved;
    public $currentJobsDelayed;
    public $currentJobsBuried;
    public $totalJobs;


    public function init()
    {
        parent::init();

        /** @var ArrayResponse $stats */
        $stats = Yii::$app->controller->module->beanstalkClient->statsTube($this->name);

        $this->currentJobsUrgent = $stats['current-jobs-urgent'];
        $this->currentJobsReady = $stats['current-jobs-ready'];
        $this->currentJobsReserved = $stats['current-jobs-reserved'];
        $this->currentJobsDelayed = $stats['current-jobs-delayed'];
        $this->currentJobsBuried = $stats['current-jobs-buried'];
        $this->totalJobs = $stats['total-jobs'];
    }
}
