<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Project $model */

$this->title = 'Create Project';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-create">

    <?= $this->render('_form', compact('model')) ?>

</div>
