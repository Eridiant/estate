<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use kartik\file\FileInput;

/** @var yii\web\View $this */
/** @var backend\models\Project $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'excerpt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'show')->textInput() ?>

    <!-- <?//= $form->field($model, 'optionsArray')->checkboxList(backend\models\Option::find()->select(['name', 'id'])->indexBy('id')->column()) ?> -->
    
    <!-- <?//= $form->field($model->galleries, 'img[]')->fileInput(['multiple' => true, 'accept' => 'image/*','id'=>'gallery-photo-add'])->label(false) ?> -->

    <!-- <?//= $form->field($model, 'img')->widget(FileInput::class, ['options' => ['accept' => 'image/*']]); ?> -->
    <?= $form->field($gallery, 'img[]')->fileInput(['multiple' => true])->label(false) ?>

    
    <!-- <input type="file" name="images[]" multiple> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
