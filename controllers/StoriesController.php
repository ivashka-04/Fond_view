<?php

namespace app\controllers;

use app\modules\admin\models\Stories;
use HttpException;
use yii\db\Expression;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;





class StoriesController extends AppController
{
    public function actionIndex() {



        $this->setMeta('Project V');

        }

        public function actionView(){

            $id = \Yii::$app->request->get('id');
            $post = Stories::findOne($id);
            if(empty($post)) return $this->render('stories');

            $story = Stories::findOne($id);
            $this->setMeta($story->keywords, $story->discription);

            return $this->render('view', compact('post'));
        }

    public function actionStories()
    {

        return $this->render('stories');
    }



}
