<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Nav;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Profile';
$this->title = Yii::t('app', 'Страница администратора');

$this->params['breadcrumps'][] = $this->title;
?>

<div class = "user-profile">
    <h1><?= Html::encode($this->title) ?></h1>
    
    
    <?= DetailView::widget ([
        
        'model' => $model,
        'attributes' => [
            'username',
            'email',
            ],
        
        ])
        ?>
    
    </div>


