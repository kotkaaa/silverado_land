<?php

/** @var \common\models\Order $order */
/** @var \yii\web\View $this */
?>

Нове замовлення!

Номер: <?= $order->id ?>

Артикул: <?= $order->sku ?>

Розмір: <?= $order->size ?>

Ім'я: <?= $order->name ?> <?= $order->surname ?>

Телефон: <?= $order->phone ?>

Місто: <?= $order->city ?>

Відділення: <?= $order->warehouse ?>
