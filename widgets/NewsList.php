<?php
namespace app\widgets;

use yii\base\Widget;
use app\models\News;


class NewsList extends Widget {
    public $newsId = 0;

    const VIEW_VERTICAL = 'vertical';
    const VIEW_HORIZONTAL = 'horizontal';
    public $viewType = self::VIEW_VERTICAL;


    function run()
    {
        $news  = News::find()->
            select('id, title, text,author, date_create')->
            orderBy(['date_create' => SORT_DESC])->
            limit(3)->
            all();
        if ($this->viewType === self::VIEW_VERTICAL) {
            return $this->render('newslist', compact('news'));
        } elseif ($this->viewType === self::VIEW_HORIZONTAL) {
            return $this->render('newslistall', compact('news'));
        }
    }
}






