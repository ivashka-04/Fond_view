<?php

namespace app\widgets;

use Symfony\Component\BrowserKit\History;
use Yii;
use yii\base\Widget;
use app\models\Stories;
use yii\db\Expression;
use yii\helpers\StringHelper;

    class StoryList extends Widget
    {
        public $hisId = 0;

       function run()
       {


//           var_dump($this->hisId);

           $history = Stories::find()->
           where(['not',['id'=>$this->hisId]])->
           select('id, author, text')->
//         orderBy(new Expression('rand()'))->
           orderBy(['new' => SORT_DESC])->
           limit(3)->
           all();




          return $this->render('storylist',compact('history'));
       }







    }