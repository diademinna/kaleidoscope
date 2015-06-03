<?php
/**
 * Created by PhpStorm.
 * User: diademina
 * Date: 03.06.15
 * Time: 17:52
 */

namespace app\controllers;


use app\models\Category;
use yii\web\Controller;

class FrontController extends Controller
{
    public $categories = [];

    public function init()
    {
        parent::init();

        $this->categories = Category::find()->all();
    }

}