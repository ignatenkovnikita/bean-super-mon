<?php

namespace ignatenkovnikita\beansupermon;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'ignatenkovnikita\beansupermon\controllers';

    public $server = ['name' => 'Beanstalk default', 'ip' => '127.0.0.1', 'port' => '11300'];

    public function init()
    {
        parent::init();

        $this->components = [
            // todo попробовать использовать тот клиент что есть уже.
            'beanstalkClient' => [
                // you should consider using a shorter namespace here!
                'class' => 'ignatenkovnikita\beansupermon\components\Pheantalk',
            ],
            'supervisor' => [
                'class' => 'ignatenkovnikita\beansupermon\components\Supervisor',
            ]
        ];

    }
}
