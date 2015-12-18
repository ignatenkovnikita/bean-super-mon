<?php
/**
 * Created by PhpStorm.
 * User: Ignatenkov Nikita
 * Site: http://ignatenkovnikita.ru/
 * Date: 16.12.15
 * Time: 18:50
 */
use ignatenkovnikita\beansupermon\models\Tube;
use yii\bootstrap\Html;


?>

<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>name</th>
        <th>current-jobs-urgent</th>
        <th>current-jobs-ready</th>
        <th>current-jobs-reserved</th>
        <th>current-jobs-delayed</th>
        <th>current-jobs-buried</th>
        <th>total-jobs</th>
    </tr>
    </thead>

    <?php
    foreach ($model->statsTube as $tube) {
        /** @var Tube $tube */
        echo '<tr>
            <!--<td>' . Html::a($tube->name, ['tube/view', 'tubeName' => $tube->name]) . '</td>-->
            <td>' . $tube->name . '</td>
            <td>' . $tube->currentJobsUrgent . '</td>
            <td>' . $tube->currentJobsReady . '</td>
            <td>' . $tube->currentJobsReserved . '</td>
            <td>' . $tube->currentJobsDelayed . '</td>
            <td>' . $tube->currentJobsBuried . '</td>
            <td>' . $tube->totalJobs . '</td>
        </tr>';

    }

    ?>
</table>
