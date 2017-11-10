<?php
/**
 * Created by PhpStorm.
 * User: Ivashka
 * Date: 09.11.2017
 * Time: 0:35
 */

namespace app\modules\admin\controllers;


use yii\filters\AccessControl;
use yii\web\Controller;
use Yii;

class ProfileController extends Controller
{
    public function behaviors()
    {
        return [
          'access' => [
              'class' => AccessControl::className(),
              'rules' => [
                  [
                      'allow' => true,
                      'roles' => '@',
                  ],
              ],
          ],
        ];
    }


    public function  actionIndex()
    {
        return $this->render('index',['model' => $this->findModel(),]);
    }

    /**
     * @return User the loaded model
     */

    private function findModel(){
        return User::findOne(Yii::$app->user->identity->getId());
    }


}


