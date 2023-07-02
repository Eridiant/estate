<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sections */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Добавить язык';
$this->params['breadcrumbs'][] = ['label' => 'Языки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="sections-form site-settings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->hint('Введите название языка') ?>

    <?= $form->field($model, 'key')->textInput(['maxlength' => true])->hint('Введите ключ языка. Он должен быть уникальным') ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true])->hint('Введите отображаемое значение языка') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
