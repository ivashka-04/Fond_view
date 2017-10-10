<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Comment */

$this->title = $model->email_author;
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<!--        --><?//= Html::a('Изменить Статус', ['update', 'id' => $model->id_comment], ['class' => 'btn btn-primary']) ?>
        <?php if($model->isAllowed()):?>
            <?= Html::a('disallow', ['disallow', 'id_comment'=>$model->id_comment], ['class' => 'btn btn-warning']); ?>
            <?php else:?>
            <?= Html::a('Allow', ['allow', 'id_comment'=>$model->id_comment], ['class' => 'btn btn-primary']) ?>
        <?php endif?>

        <?= Html::a('Удалить', ['delete', 'id' => $model->id_comment], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_comment',
            'news_id',
            'email_author:ntext',
            'text:ntext',
            'dt_create',
//            'status',

            [
                'attribute' => 'status',
                'value' => !$model->status ? '<span class="text-danger"> Скрыт</span>' : '<span class="text-success">Опублиокован</span>',
                'format' => 'html'
            ],


        ],
    ]) ?>






</div>
