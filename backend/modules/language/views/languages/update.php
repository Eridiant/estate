<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sections */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Редактировать язык';
$this->params['breadcrumbs'][] = ['label' => 'Языки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu-update">

    <div class="site-settings-form">
        <div class="menu-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'key')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success btn-admin']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>

