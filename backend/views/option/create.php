<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Option $model */

$this->title = 'Create Option';
$this->params['breadcrumbs'][] = ['label' => 'Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="option-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
