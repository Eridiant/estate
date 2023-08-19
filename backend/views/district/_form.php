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

    <?= $form->field($model, 'spaceexcerpt')->checkbox() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'spacedescription')->checkbox() ?>

    <!-- <?//= $form->field($model, 'polygon')->textarea(['rows' => 6]) ?> -->
    <p>Галлерея (галочка - отобразить в Галлерее, крестик - удалить с диска)</p>
    <div class="gallery">
        <?php if ($model->gallery): ?>
            <?php foreach ($gallery as $gallery): ?>
                <div class="gallery-wrapper">
                    <img style="width: 100px" src="<?= '/frontend/web/uploads/district/' . $model->id . '/' . $gallery ?>" alt="">
                    <div class="gallery-buttons">
                        <div class="gallery-check">
                            <input id="check-<?= $gallery; ?>" data-img="<?= $gallery; ?>" type="checkbox" name="gallery[]" value="<?= $gallery ?>" <?= str_contains($model->gallery, $gallery) ? 'checked' : '' ?> >
                            <label for="check-<?= $gallery; ?>"></label>
                        </div>
                        <div class="gallery-delete">
                            <input id="delete-<?= $gallery; ?>" data-img="<?= $gallery; ?>" type="checkbox" name="gallery[]" value="<?= $gallery ?>">
                            <label for="delete-<?= $gallery; ?>"></label>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <?= $form->field($model, 'galleryFiles[]')->fileInput(['multiple' => true]); ?>
    <?= $form->field($model, 'gallery')->hiddenInput()->label(false); ?>
    <?= $form->field($model, 'deleteFiles')->hiddenInput()->label(false); ?>

    <?php if ($model->img): ?>
        <img style="width: 200px" src="<?= '/frontend/web/uploads/district/' . $model->img ?>" alt="">
    <?php endif; ?>
    <?= $form->field($model, 'imageFile')->fileInput(); ?>

    <?= $form->field($model, 'polygon')->textarea(['rows' => 6]) ?>

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
