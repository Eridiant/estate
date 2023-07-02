<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $language backend\models\Language */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Просмотр';
$this->params['breadcrumbs'][] = ['label' => 'Языки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-md-6">
    <div class="box box-solid box-info">
        <div class="box-header">Описание языка</div>
        <div class="box-body">
            <dl class="dl-horizontal">
                <dt>ID:</dt>
                <dd><?= Html::encode($language->id) ?></dd>
                <dt>Название:</dt>
                <dd><?= Html::encode($language->name) ?></dd>
                <dt>Ключ:</dt>
                <dd><?= Html::encode($language->key) ?></dd>
                <dt>Дата создания: </dt>
                <dd><?= Html::encode(date('d.m.Y H:i:s', $language->created_at)) ?></dd>
                <dt>Дата обновления: </dt>
                <dd><?= Html::encode(date('d.m.Y H:i:s', $language->updated_at)) ?></dd>
                <dt>Дата удаления: </dt>
                <?php if($language->deleted_at == 0): ?>
                <dd><?= Html::encode('Не удален') ?></dd>
                <?php else: ?>
                <dd><?= Html::encode(date('d.m.Y H:i:s', $language->deleted_at)) ?></dd>
                <?php endif; ?>
            </dl>
        </div>
    </div>
</div>



