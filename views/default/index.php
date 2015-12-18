<?php

use  ignatenkovnikita\beansupermon\models\Server;
use  ignatenkovnikita\beansupermon\models\Supervisor;
use yii\helpers\Html;

?>

<table class="table table-striped table-hover">
    <thead>
    <th>name</th>
    <th>current-connections</th>
    <th>current-jobs-buried</th>
    <th>current-jobs-delayed</th>
    <th>current-jobs-ready</th>
    <th>current-jobs-reserved</th>
    <th>current-jobs-urgent</th>
    <th>current-tubes</th>
    </thead>
    <?php


    /** @var Server $server */
        echo '<tr>
            <td>' . Html::a($server->name, ['server/view']) . '</td>
            <td>' . $server->currentConnections . '</td>
            <td>' . $server->currentJobsBuried . '</td>
            <td>' . $server->currentJobsDelayed . '</td>
            <td>' . $server->currentJobsReady . '</td>
            <td>' . $server->currentJobsReserved . '</td>
            <td>' . $server->currentJobsUrgent . '</td>
            <td>' . $server->currentTubes . '</td>
        </tr>';

    ?>
</table>


<table class="table table-striped table-hover">
    <thead>
    <th>name</th>
    <th>state</th>
    <th>pid</th>
    </thead>
    <?php
    /** @var Supervisor $supervisor */
    echo '<tr>
            <td>' . Html::a($supervisor->identification, ['supervisor/view']) . '</td>
            <td>' . $supervisor->state . '</td>
            <td>' . $supervisor->pid . '</td>
        </tr>';
    ?>

</table>
