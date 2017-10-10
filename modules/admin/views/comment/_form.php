<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'news_id')->textInput() ?>

<!--    --><?//= $form->field($model, 'email_author')->textarea(['rows' => 6]) ?>

<!--    --><?//= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

<!--    --><?//= $form->field($model, 'dt_create')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ '0' => 'Скрыт', '1' => 'Опублиокван', ], ['prompt' => '']) ?>

    <div class="form-group">

        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        <?= Html::a('Удалить', ['delete', 'id' => $model->id_comment], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
