<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Истории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stories-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Новая история', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'user_id',
            'author',
//            'text:ntext',
            'date_create',
            // 'image',
            // 'discription',
            // 'keywords',
//             'new',
        [
          'attribute' => 'new',
            'value' => function($data){
        return !$data->new ? '<span class="text-danger">Старая история</span>' : '<span class="text-success">Новая история</span>';

            },
            'format'=> 'html',
        ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
