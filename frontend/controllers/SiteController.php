<?php

namespace frontend\controllers;

use common\services\OrderService;
use frontend\models\OrderForm;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /** @var OrderService */
    public $orderService;

    /**
     * SiteController constructor.
     * @param $id
     * @param $module
     * @param OrderService $orderService
     * @param array $config
     */
    public function __construct($id, $module, OrderService $orderService, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->orderService = $orderService;
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'order' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * @return string|void
     */
    public function actionSuccess()
    {
        if (!\Yii::$app->session->hasFlash('success')) {
            return $this->goHome()->send();
        }

        return $this->render('success');
    }

    /**
     * Confirm order.
     *
     * @return mixed
     */
    public function actionOrder()
    {
        if (($form = new OrderForm()) !== null && $form->load(\Yii::$app->request->post()) && $this->orderService->createOrder($form)) {
            \Yii::$app->session->setFlash('success', 'Order confirmed.');
            return $this->redirect(['success'])->send();
        }
        return $this->redirect(\Yii::$app->request->referrer)->send();
    }

    /**
     * @param $term
     * @return \yii\web\Response
     */
    public function actionSearchCity($term)
    {
        $out = ['results' => []];

        foreach ($this->orderService->findCity($term) as $city) {
            $out['results'][] = [
                'id' => $city['DescriptionRu'],
                'text' => $city['DescriptionRu'],
                'ref' => $city['Ref']
            ];
        }

        return $this->asJson($out);
    }

    /**
     * @param $term
     * @return \yii\web\Response
     */
    public function actionSearchWarehouse($term)
    {
        $out = ['results' => []];

        foreach ($this->orderService->findWarehouse($term) as $warehouse) {
            $out['results'][] = [
                'id' => $warehouse['DescriptionRu'],
                'text' => $warehouse['DescriptionRu'],
                'ref' => $warehouse['Ref']
            ];
        }

        return $this->asJson($out);
    }
}
