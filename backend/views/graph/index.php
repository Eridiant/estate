<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin(); ?>

<div class="form-wrapper">
    <?php foreach ($model as $index => $model): ?>
        <div class="form-groups">
            <?= $form->field($model, "[$index]id")->hiddenInput()->label(false) ?>
            <?= $form->field($model, "[$index]data")->textInput() ?>
            <?= $form->field($model, "[$index]cost")->textInput() ?>
        </div>
    <?php endforeach; ?>

</div>


<?= Html::submitButton('Add', ['class' => 'btn btn-danger', 'id' => 'add']) ?>
<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>

<?php ActiveForm::end(); ?>

<?php
$js = <<< JS
    document.querySelector('#add').addEventListener('click', (e) => {
        e.preventDefault();
        request('admin/graph/create', {})
                .then(response => {
                    if (JSON.parse(response)) {

                        // document.querySelector('#projects').innerHTML = JSON.parse(response);

                        // console.log('', JSON.parse(response).data.id);
                        // console.log('', JSON.parse(response));
                        // return;

                        document.querySelector('.form-wrapper').insertAdjacentHTML('beforeend', JSON.parse(response));
                    }

            });
    });
    $('#add-cost-field').on('click', function() {
        var index = $('#cost-form').find('.form-group').length;
        var template = `<div class="form-group">
                            <label class="control-label">Cost</label>
                            <input type="text" class="form-control" name="CostForm[costs][555][cost]">
                        </div>`;
        $('#cost-form').append(template);
    });
JS;

$this->registerJs($js);
?>
