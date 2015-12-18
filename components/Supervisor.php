<?php
/**
 * Created by PhpStorm.
 * User: Ignatenkov Nikita
 * Site: http://ignatenkovnikita.ru/
 * Date: 17.12.15
 * Time: 15:01
 */

namespace ignatenkovnikita\beansupermon\components;


use Supervisor\Api;
use yii\base\Component;

class Supervisor extends Component
{
    private $_connection;


    public function __construct($host = '127.0.0.1', $port = '9001')
    {
        parent::__construct();
        $this->setConnection(new Api($host, $port));
    }

    public function setConnection($connection)
    {
        $this->_connection = $connection;
        return $this->_connection;
    }

    public function __call($name, $params)
    {
        return call_user_func_array([$this->_connection, $name], $params);
    }


}
