<?php
/**
 * Created by PhpStorm.
 * User: Ignatenkov Nikita
 * Site: http://ignatenkovnikita.ru/
 * Date: 16.12.15
 * Time: 20:20
 */

namespace ignatenkovnikita\beansupermon\components;


use Pheanstalk\Pheanstalk;
use yii\base\Component;

class Pheantalk extends Component
{
    private $_connection;


    public function __construct($host = '127.0.0.1', $port = ' 11300', $connectTimeout = 0)
    {
        parent::__construct();
        $this->setConnection(new Pheanstalk($host, $port, $connectTimeout));
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
