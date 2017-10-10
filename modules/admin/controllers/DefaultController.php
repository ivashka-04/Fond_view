<?php

namespace app\modules\admin\controllers;


use app\modules\admin\models\News;
use Yii;
use yii\helpers\Html;
use app\modules\admin\models\SearchForm;


/**
 * Default controller for the `admin` module
 */
class DefaultController extends AppAdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */



    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionSearch()
    {
        $q = Yii::$app->qetRequest()->getQueryParam('q');
        $query = News::find()->where(['like', 'text', $q]);


        return $this->render('search', [
           'news', 'q' => $q
        ]);
    }
}
