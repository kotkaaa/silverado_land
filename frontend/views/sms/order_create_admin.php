<?php

/** @var \frontend\models\OrderForm $order */
/** @var \yii\web\View $this */
?>

Нове замовлення!

Артикул: <?= $order->sku ?>

Розмір: <?= $order->size ?>

Ім'я: <?= $order->name ?> <?= $order->surname ?>

Телефон: <?= $order->phone ?>

Місто: <?= $order->city ?>

Відділення: <?= $order->warehouse ?>
