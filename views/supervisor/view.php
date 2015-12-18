<?php
/**
 * Created by PhpStorm.
 * User: Ignatenkov Nikita
 * Site: http://ignatenkovnikita.ru/
 * Date: 17.12.15
 * Time: 15:25
 */

use ignatenkovnikita\beansupermon\models\Process;

//var_dump($model->getStatsProcess());
?>
<table class="table table-striped table-hover">
    <thead>
    <th>state</th>
    <th>name</th>
    <th>description</th>
    </thead>
    <?php
    foreach ($model->getStatsProcess() as $process) {
        /** @var Process $process */
        echo '<tr>
                <td>' . $process->statename . '</td>
                <td>' . $process->name . '</td>
                <td>' . $process->description . '</td>
            </tr>';
    }

    ?>
</table>
