<?php
use app\widgets\NewsAll;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
/* @var $this yii\web\View */
\app\assets\MyAsset::register($this);
$this->title = 'Фонда А | Новости';


?>

<?= Html :: csrfMetaTags(); ?>

    <article id="content" class="tabs">

        <?php
        $mainImg = $post_news->getImage();
        $gallery = $post_news->getImages();


        ?>


            <div class="box1">
                <div class="wrapper">

                        <h2><strong>Н</strong>овость <span><?=$post_news->date_create ?></span></h2>
                        <div class="pad_bot1">
                            <figure class="left marg_right1">

                                <!--<img src="/images/page3_img1.jpg" alt="" align="right">-->
                            <?=Html::img($mainImg->getUrl('264x104')); ?>

                            </figure></div>
                    <h2 class="color3"><span><?=$post_news->title ?></span></h2>

                            <p class="pad_left2">
                                <?=$post_news->text ?>
                            </p>
                 </div>

            </div>

        <br>
        <?php if(!empty($comments)): ?>

            <?php foreach ($comments as $comment): ?>

                <h2><span>
                        <?= $comment->email_author; ?>

                            </span></h2>
                <p class="pad_bot2">
                    <strong>
                        <?= $comment->text; ?>
                    </strong>
                </p>
                <p class="pad_bot1">
                    <?= $comment->getDate(); ?>
                </p>
            <?php endforeach; ?>
        <?php endif; ?>


        <?php if(Yii::$app->session->getFlash('comment')):?>
            <div class="alert alert-success" role="alert">
                <?= Yii::$app->session->getFlash('comment'); ?>
            </div>

        <?php endif;?>

        <?php $form = ActiveForm::begin(['action' => ['news/comment', 'id' => $post_news->id],
//            'enableAjaxValidation' => true,


            'options' => ['id' => 'ContactForm', 'role'=>'form']]); ?>
        <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>" />

        <?= $form->field($commentForm, 'comment', ['inputTemplate' => '<div class="input-group"><span></span>{input}</div>'])->textarea(['class' => 'textarea_box'])->label(false);?>

        <?= $form->field($commentForm, 'author', ['inputTemplate' => '<div class="wrapper"><span></span>{input}</div>'])->textInput(['class' => 'wrapper input'])->label(false); ?>


        <button type="submit" class="button2 color1">Отправить</button>

       <!-- --><?/*= Html::submitButton('Отправить', ['class' => 'button2 color1', 'name' => 'contact-button']) */?>

        <?php ActiveForm::end(); ?>


<!--        --><?php //var_dump($comment); ?>

        <?=NewsAll:: widget(['mySize' =>2 ]);?>
    </article>



