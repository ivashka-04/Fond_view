<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Stories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stories-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?/*= $form->field($model, 'user_id')->textInput() */?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),

    ]); ?>

    <?= $form->field($model, 'date_create')->widget(\yii\jui\DatePicker::className(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]); ?>

    <?= $form->field($model, 'image')->fileInput()?>

    <?= $form->field($model, 'discription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'new')->dropDownList([ 1 => 'Новинка', 0 => 'Устаревшее', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить изменения', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
