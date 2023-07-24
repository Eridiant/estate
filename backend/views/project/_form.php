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

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <!-- <?//= $form->field($model, 'title')->textarea(['rows' => 2]) ?> -->

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <!-- <?//= $form->field($model, 'variant')->textarea(['rows' => 2]) ?> -->

    <?= $form->field($model, 'apartment')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <!-- <?//= $form->field($model, 'excerpt')->textarea(['rows' => 6]) ?> -->

    <!-- <?//= $form->field($model, 'description')->textarea(['rows' => 6]) ?> -->

<?php if ($model->id && \backend\modules\language\models\Language::getCurrent()->key != 'ru-RU'): ?>
    <p><?= \backend\models\ProjectContent::find()->where(['project_id' => $model->id, 'language' => 'ru-RU'])->one()?->desc; ?></p>
<?php endif; ?>

    <?= $form->field($model, 'desc')->textarea(['rows' => 6]) ?>

    <?php if ($model->img): ?>
        <img style="width: 200px" src="<?= '/frontend/web/uploads/project/' . $model->img ?>" alt="">
    <?php else: ?>
        <img style="width: 200px" src="<?= '/frontend/web/images/index/projects/projects-' . $model->id . '.jpg' ?>" alt="">
    <?php endif; ?>
    <?= $form->field($model, 'imageFile')->fileInput(); ?>

    <p>Галлерея</p>
    <div class="gallery">
        <?php if ($model->gallery): ?>
            <?php foreach (explode(',', $model->gallery) as $gallery): ?>
                <img style="width: 100px" src="<?= '/frontend/web/uploads/project/' . $model->id . '/' . $gallery ?>" alt="">
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <?= $form->field($model, 'galleryFiles[]')->fileInput(['multiple' => true]); ?>
    <?= $form->field($model, 'gallery')->hiddenInput()->label(false); ?>

    <?= $form->field($model, 'coordinate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show')->checkbox() ?>

    <?= $form->field($model, 'optionsArray')->checkboxList(backend\models\Option::find()->select(['name', 'id'])->indexBy('id')->column()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
