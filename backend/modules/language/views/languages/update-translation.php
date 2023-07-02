<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sections */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Редактировать запись';
$this->params['breadcrumbs'][] = ['label' => 'Языки', 'url' => ['active']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu-update">
    <div class="site-settings-form">
        <div class="menu-form">
            <h3>Оригинал: <?=$translation->message ?></h3>
            <?php $form = ActiveForm::begin(); ?>
            
            <?= $form->field($model, 'translation')->textarea(['rows' => '6']) ?>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success btn-admin']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>