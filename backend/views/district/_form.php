<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\District $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="district-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'excerpt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <!-- <?//= $form->field($model, 'polygon')->textarea(['rows' => 6]) ?> -->

    <?php if ($model->img): ?>
        <img style="width: 200px" src="<?= '/frontend/web/uploads/project/' . $model->img ?>" alt="">
    <?php else: ?>
        <img style="width: 200px" src="<?= '/frontend/web/images/index/projects/projects-' . $model->id . '.jpg' ?>" alt="">
    <?php endif; ?>
    <?= $form->field($model, 'imageFile')->fileInput(); ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'labelColor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
