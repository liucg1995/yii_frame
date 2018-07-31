<?php
/**
 * Created by PhpStorm.
 * User: liucg
 * Date: 2018/7/28
 * Time: 下午10:44
 */

use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>