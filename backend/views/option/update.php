<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Option $model */

$this->title = 'Update Option: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="option-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
