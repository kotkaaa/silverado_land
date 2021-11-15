<?php

namespace common\services;

use common\components\delivery\api\NovaPoshtaApi;
use common\components\Turbosms;
use common\models\OrderInterface;
use common\helpers\PhoneHelper;

/**
 * Class OrderService
 * @package common\services
 */
class OrderService extends \yii\base\Component
{
    /** @var Turbosms */
    private $sms;

    /** @var NovaPoshtaApi */
    private $delivery;

    /**
     * OrderService constructor.
     * @param array $config
     */
    public function __construct($config = [])
    {
        parent::__construct($config);
        $this->sms = \Yii::$app->sms;
        $this->delivery = \Yii::$app->delivery->api();
    }

    /**
     * @param OrderInterface $order
     * @return bool
     * @throws \yii\base\InvalidConfigException
     */
    public function createOrder(OrderInterface $order): bool
    {
        if (!$order->validate()) {
            return false;
        }

        if (\Yii::$app->sms->compose('order_create_admin', ['order' => $order])->setTo(\Yii::$app->params['adminPhone'])->send()) {
            \Yii::$app->sms->compose('order_create_user')->setTo(PhoneHelper::format($order->phone, PhoneHelper::PHONE_FORMAT_INT))->send();

            return true;
        }

        return false;
    }

    /**
     * @param string $term
     * @return array|mixed
     */
    public function findCity($term = '')
    {
        $data = [];

        $response = $this->delivery->getCities(0, $term);

        if (is_array($response) && $response['success'] === true) {
            $data = $response['data'];
        }

        return $data;
    }

    /**
     * @param string $term
     * @return array|mixed
     */
    public function findWarehouse($term = '')
    {
        $data = [];

        $response = $this->delivery->getWarehouse($term);

        if (is_array($response) && $response['success'] === true) {
            $data = $response['data'];
        }

        return $data;
    }
}