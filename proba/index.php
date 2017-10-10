<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stories-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id',
                'options' => [
                    'style' => ['width' => '30px'],
                ],
//                'contentOptions' => [
//                    'style' => [
//                        'color' => 'red',
//                    ],
//                ]
            ],
            'image',
            [
                'attribute' => 'text',
                'format' => 'ntext',
                'content' => function($model, $key, $index, $data) {
                    $content = mb_substr($model->text, 0, 50);
                    $pos = strpos($content, strrchr($content, ' '));
                    $content = rtrim(mb_substr($content, 0, $pos)) . '...';
                    return $content;
                },
            ],
            'date_create',
            'date_update',
            [
                'attribute' => 'css_class',
            ],
            [
                'attribute' => 'status',
                'filter' => ['1' => 'Опубликовано', '0' => 'Не опубликовано'],
                'content' => function($data) {
                    $content = ($data->status) ? 'Опубликовано' : 'Не опубликовано';

                    return ($data->status) ? Html::tag('span', 'Опубликовано', ['class' => 'label label-success']) : Html::tag('span', 'Не опубликовано', ['class' => 'label label-danger']);
                },
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Действие',
                'headerOptions' => [
                    'style' => [
                        'color' => '#3c8dbc',
                    ],
                ],
                'buttons' => [
                    'view' => function($url, $model, $key) {
                        $url = str_replace('admin/', '', $url);
                        return Html::a('<i class="fa fa-eye"></i>', $url, ['target' => '_blank']);
                    },
                ]
            ],
            //['class' => \yii\grid\CheckboxColumn::className()],
        ],
    ]); ?>
</div>
