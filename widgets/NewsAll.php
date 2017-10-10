<?php
/**
 * Created by PhpStorm.
 * User: Ivashka
 * Date: 11.04.2017
 * Time: 11:45
 */

namespace app\widgets;


use yii\base\Widget;
use app\models\News;
use yii\data\Pagination;

class NewsAll extends Widget
{

    public $mySize;

    function run()
    {
        $query  = News::find()->
        select('id, title, text,author, date_create')->
        orderBy(['date_create' => SORT_DESC])
//            ->limit(3)

//            ->all()
        ;

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' =>$this->mySize, 'pageSizeParam'=>false, 'forcePageParam'=>false]);
        $news = $query->offset($pages->offset)->limit($pages->limit)->all();

            return $this->render('newslistall', compact('news', 'pages'));

    }

}