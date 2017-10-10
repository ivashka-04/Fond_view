<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php $f= ActiveForm::begin(); ?>

<?= $f->field($form, 'name'); ?>
<?= $f->field($form, 'email'); ?>
<?= Html::submitButton('Send'); ?>




<?php ActiveForm::end(); ?>
