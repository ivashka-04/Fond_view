<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;


mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">




    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

   <!-- --><?/*= $form->field($model, 'id_parenet')->textInput(['maxlength' => true]) */?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'text')->textarea(['rows' => 6]) */?>

    <?= /*$form->field($model, 'text')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
        ]);*/
            $form->field($model, 'text')->widget(CKEditor::className(), [

          'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),

        ]);


    ?>


    <?= $form->field($model, 'date_create')->widget(\yii\jui\DatePicker::className(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]); ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput()?>

 <!--   --><?/*= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*'])*/?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discription')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить изменения', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
