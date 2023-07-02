<?php

$this->title = 'Локализация';
$this->params['breadcrumbs'][] = $this->title;

use yii\grid\GridView;
use yii\helpers\Html;
use yii\bootstrap\Tabs;
?>
<div class="sections-index">
    <div class="table-admin-container">
        <h3>Удаленные языки</h3>
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
                        'attribute'=>'deleted_at',
                        'label'=>'Дата удаления',
                        'value' => function($data){
                            return date('d.m.Y H:i:s', $data->deleted_at);
                        }
                    ],
                    [
                        'label' => 'Действия',
                        'format' => 'raw',
                        'value' => function($data){
                            return Html::a(
                                '<span class="glyphicon glyphicon-pencil"></span> Восстановить <div style="display: inline-block; margin-right: 10px"></div>',
                                ['languages/restore', 'id' => $data->id]);
                        },
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>
