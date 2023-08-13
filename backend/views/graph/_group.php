<?php

use yii\helpers\Html;

?>

<div class="form-groups">
    <div class="form-group field-<?= $model->id ?>-id">

        <input type="hidden" id="<?= $model->id ?>-id" class="form-control" name="Graph[1][id]" value="<?= $model->id ?>">

        <div class="help-block"></div>
    </div>
    <div class="form-group field-<?= $model->id ?>-data">
        <label class="control-label" for="<?= $model->id ?>-data">Data</label>
        <input type="text" id="<?= $model->id ?>-data" class="form-control" name="Graph[1][data]" value="" aria-invalid="false">
        <div class="help-block"></div>
    </div>
    <div class="form-group field-<?= $model->id ?>-cost">
        <label class="control-label" for="<?= $model->id ?>-cost">Cost</label>
        <input type="text" id="<?= $model->id ?>-cost" class="form-control" name="Graph[1][cost]" value="" aria-invalid="false">
        <div class="help-block"></div>
    </div>
</div>