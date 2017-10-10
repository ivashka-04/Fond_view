<?php
/**
 * Created by PhpStorm.
 * User: Ivashka
 * Date: 18.05.2017
 * Time: 21:42
 */

namespace app\widgets;


use yii\base\Widget;
use app\models\Stories;
use yii\data\Pagination;

class StoryAll extends Widget
{
    public $hisId = 0;
    public $mySize;

    function run()
    {
        $query = Stories::find()->
        where(['not',['id'=>$this->hisId]])->
        select('id, author, text')->
//         orderBy(new Expression('rand()'))->
        orderBy(['date_create' => SORT_DESC])/*->
        limit(3)->
        all()*/;

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' =>$this->mySize, 'pageSizeParam'=>false, 'forcePageParam'=>false]);
        $history = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('storylistall', compact('history', 'pages'));
    }


}