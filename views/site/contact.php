<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

use app\assets\MyAsset;
MyAsset::register($this);

$this->title = 'Фонда А |  Контакты';
//$this->params['breadcrumbs'][] = $this->title;
?>
<article id="content">
    <div class="wrapper">
        <div class="pad_left2 relative">


    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">

            Благодарим Вас за обращение к нам. Мы ответим Вам как можно скорее.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>

            Если у вас есть деловые вопросы или другие вопросы, заполните следующую форму, чтобы связаться с нами.
            Спасибо.
        </p>
        <img src="/images/page6_img1.png" alt="" class="img1">


                <?php $form = ActiveForm::begin(['id' => 'ContactForm']); ?>


                    <?= $form->field($model, 'name', ['inputTemplate' => '<div class="wrapper"><span></span>{input}</div>'])->textInput(['autofocus' => true, 'class' => 'wrapper input']) ?>

                    <?= $form->field($model, 'email', ['inputTemplate' => '<div class="wrapper"><span></span>{input}</div>'])->textInput(['class' => 'wrapper input']) ?>

                    <?//= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body', ['inputTemplate' => '<div class="input-group"><span></span>{input}</div>'])->textarea(['class' => 'textarea_box']) ?>


                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>


                        <div>
                        <?= Html::submitButton('Отправить', ['class' => 'button2 color3', 'name' => 'contact-button']) ?>
                        <button class="button2 color3" onClick="document.getElementById('ContactForm').reset()">Очистить</button>
                            <!--<a href="#" class="button2 color3" onClick="document.getElementById('ContactForm').reset()">Очистить</a>-->
                        </div>


                <?php ActiveForm::end(); ?>


    <?php endif; ?>
        </div>
    </div>

</article>
