<?php

use backend\models\Message;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Message', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            // 'email:email',
            'phone',
            // 'subject',
            'lang',
            //'body:ntext',
            // 'status_amo_id',
            // 'status_mail',
            // 'status_save',
            [
                'label' => 'Почта',
                'attribute' => 'status_mail',
                'format' => 'raw',
                // 'filter' => Post::find()->select(['active', 'id'])->indexBy('id')->column(),
                'value' => function($model) {
                    return $model->status_mail > 0 ? '<span class="text-success">ok</span>' : '<span class="text-danger">error</span>';
                }
            ],
            [
                'label' => 'В базе данных',
                'attribute' => 'status_save',
                'format' => 'raw',
                // 'filter' => Post::find()->select(['active', 'id'])->indexBy('id')->column(),
                'value' => function($model) {
                    return $model->status_save > 0 ? '<span class="text-success">ok</span>' : '<span class="text-danger">error</span>';
                }
            ],
            [
                'label' => 'В амо',
                'attribute' => 'status_amo_id',
                'format' => 'raw',
                // 'filter' => Post::find()->select(['active', 'id'])->indexBy('id')->column(),
                'value' => function($model) {
                    return $model->status_amo_id > 0 ? '<span class="text-success">ok</span>' : '<span class="text-danger">error</span>';
                }
            ],
            //'ip:ntext',
            //'city:ntext',
            //'country:ntext',
            //'created_at',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Message $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
