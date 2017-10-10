<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<!--        --><?//= Html::a('Create Comment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],



            'id_comment',
            'news_id',
            'email_author:ntext',
            'text:ntext',
//            'dt_create',
            [
                'attribute'=>'dt_create',
                'label'=>'Создано',
                'format'=>'date', // Доступные модификаторы - date:datetime:time
                'headerOptions' => ['width' => '200'],
            ],
//             'status',
        [
            'attribute' => 'status',
            'value' => function($data){
                return !$data->status ? '<span class="text-danger">Скрыт<span' : '<span class="text-success">Опубликован<span';
            },
            'format' => 'html',

        ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {allow} {delete}',

                'buttons' => [
                    'format' => 'html',
//                    'hint' => 'Опубликовать',

        'allow' =>
                    function ($url, $model)/* use ($manageableRoles)*/ {
                        if (/*$model->id_comment && */$model->status != 1) {
                            return $url = Html::a(
                                '<span class="glyphicon glyphicon-arrow-up">',
                                Url::to(['comment/allow', 'id_comment' => $model->id_comment])
                            );
                        }
                    }
    ]
                ]
    ],



//            ['class' => 'yii\grid\ActionColumn'],



    ]); ?>




</div>
