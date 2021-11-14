<?php

namespace frontend\controllers;

use frontend\models\OrderForm;

/**
 * Class LoveController
 * @package frontend\controllers
 */
class LoveController extends \yii\web\Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [
            'order' => new OrderForm([
                'size' => 16
            ])
        ]);
    }
}
