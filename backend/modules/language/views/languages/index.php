<?php

$this->title = 'Локализация';
$this->params['breadcrumbs'][] = $this->title;

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;
?>
    <p style="display: inline-block">
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>
    <p style="float: right; display: inline-block">
        <?= Html::a('Удаленные', ['deleted'], ['class' => 'btn btn-primary']) ?>
    </p>
<div class="sections-index">
    <div class="table-admin-container">
        <h3>Языки сайта</h3>
        <div class="table-content">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    [
                        'attribute'=>'id',
                        'label'=>'№',
                    ],
                    [
                        'attribute'=>'name',
                        'label'=>'Язык',
                        'format'=>'html',
                        'value' => function($data){
                            return Html::a(
                                $data->name,
                                \Yii::$app->request->baseUrl."/languages/".$data->id
                            );
                        }
                    ],
                    [
                        'attribute' => 'key',
                        'label' => 'Ключ языка',
                    ],
                    [
                        'attribute'=>'default',
                        'label'=>'Сейчас активен',
                        'value' => function($data){
                            return $data->default == 1 ? "Да" : "Нет";
                        }
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'header' => 'Действия',
                        'template' => '{update} {delete}',
                        'headerOptions' => ['width' => '80'],
                        'buttons' => [
                            'update' => function ($url) {
                                return Html::a(
                                    '<span class="glyphicon glyphicon-pencil"></span> Редактировать <div style="display: inline-block; margin-right: 10px"></div>',
                                    $url);
                            },
                            'delete' => function ($url) {
                                return Html::a(
                                    '<span class="glyphicon glyphicon-trash"></span> Удалить',
                                    $url);
                            },
                        ],
                    ],
                ],
            ]); ?>
        </div>
    </div>
    <p style="display: inline-block">
        <?= Html::a('Добавить', ['create-translation'], ['class' => 'btn btn-primary']) ?>
    </p>
    <p style="display: inline-block">
        <?= Html::a('Обновить', ['update-bd'], ['class' => 'btn btn-primary']) ?>
    </p>
    <div class="table-admin-container">
        <h3>Translations</h3>
        <!-- <p style="display: inline-block">
            <a class="btn btn-primary" href="/site/login">Перевод на сайте</a>
        </p> -->
        <div class="table-content">
            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider2,
                'filterModel' => $searchModel,
                'columns' => [
                    // [
                    //     'attribute'=>'id',
                    //     'label'=>'№',
                    // ],
                    [
                        'attribute'=>'category',
                    ],
                    [
                        'attribute' => 'message',
                    ],
                    [
                        // 'attribute' => 'translait',
                        'label'     => 'Перевод',
                        // 'attribute' => 'translaitTranslation',
                        // 'attribute' => 'translait',
                        'attribute' => 'translation',
                        // 'format'    => 'raw',
                        'value'     => function($data) {
                            if ($data->translait)
                                return $data->translait->translation;
                        }
                        // 'value' => 'translait.translation',
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'header' => 'Действия',
                        'template' => '{update} {delete}',
                        'headerOptions' => ['width' => '80'],
                        'buttons' => [
                            'update' => function ($url) {
                                $url = str_replace('update', 'translation-update', $url);
                                return Html::a(
                                    '<span class="glyphicon glyphicon-pencil"></span> Редактировать <div style="display: inline-block; margin-right: 10px"></div>',
                                    $url);
                            },
                            'delete' => function ($url) {
                                $url = str_replace('delete', 'translation-delete', $url);
                                return Html::a(
                                    '<span class="glyphicon glyphicon-trash"></span> Удалить', $url);
                            },
                        ],
                    ],
                ],
            ]); ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
