<?php

/** @var \frontend\models\OrderForm $order */
/** @var yii\web\View $this */

use frontend\assets\LoveAsset;
use kartik\form\ActiveForm;
use yii\bootstrap4\Modal;
use kartik\select2\Select2;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\web\JsExpression;
use common\helpers\PhoneHelper;

LoveAsset::register($this);
?>

<header class="header__media">
    <video id="intro" preload="auto" allow="autoplay" autoplay playsinline muted>
        <source src="/uploads/love/silverado_jewelry_<?= Yii::$app->language ?>.mov">
    </video>

    <div class="logo">
        <img src="/img/love/logo-top.svg" alt="Silverado">

        <span class="logo-text">jewelry boutique</span>
    </div>

    <div class="scrolldown anchor-link" data-anchor="main-product">
        <span><?=  \Yii::t('app', 'продовжити') ?></span>

        <svg width="52" height="35" viewBox="0 0 52 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1213 5.87869C11.2929 7.05027 11.2929 8.94976 10.1213 10.1213C8.94973 11.2929 7.05023 11.2929 5.87866 10.1213C4.70709 8.94976 4.70709 7.05027 5.87866 5.87869C7.05023 4.70712 8.94973 4.70712 10.1213 5.87869ZM36.9914 14.364C38.163 15.5356 38.163 17.4351 36.9914 18.6067C35.8198 19.7783 33.9203 19.7783 32.7488 18.6067C31.5772 17.4351 31.5772 15.5356 32.7488 14.364C33.9203 13.1925 35.8198 13.1925 36.9914 14.364ZM18.6067 18.6067C19.7782 17.4351 19.7782 15.5356 18.6067 14.364C17.4351 13.1925 15.5356 13.1925 14.364 14.364C13.1924 15.5356 13.1924 17.4351 14.364 18.6067C15.5356 19.7783 17.4351 19.7783 18.6067 18.6067ZM45.4768 5.87869C46.6483 7.05027 46.6483 8.94976 45.4768 10.1213C44.3052 11.2929 42.4057 11.2929 41.2341 10.1213C40.0626 8.94976 40.0626 7.05027 41.2341 5.87869C42.4057 4.70712 44.3052 4.70712 45.4768 5.87869ZM28.5063 28.5062C30.0684 26.9441 30.0684 24.4114 28.5063 22.8493C26.9442 21.2872 24.4115 21.2872 22.8494 22.8493C21.2873 24.4114 21.2873 26.9441 22.8494 28.5062C24.4115 30.0683 26.9442 30.0683 28.5063 28.5062Z" fill="white"></path>
            </g>
            <defs>
                <filter id="filter0_d" x="0" y="0" width="51.3555" height="34.6777" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                    <feOffset></feOffset>
                    <feGaussianBlur stdDeviation="2.5"></feGaussianBlur>
                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.6 0"></feColorMatrix>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                </filter>
            </defs>
        </svg>
    </div>

    <button class="btn btn-lg skip"><?=  \Yii::t('app', 'пропустити заставку') ?></button>
</header>

<main class="main__container hidden">
    <section class="main__product" id="main-product">
        <?= $this->render('_blocks-' . \Yii::$app->language) ?>
    </section>

    <section class="main__offer">
        <div class="container">
            <h2><?=  \Yii::t('app', 'Купити каблучку для заручин за акційною ціною') ?></h2>

            <div class="price">
                <span class="old">790</span>
                670
                <small>грн</small>
            </div>

            <svg width="52" height="35" viewBox="0 0 52 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1213 5.87869C11.2929 7.05027 11.2929 8.94976 10.1213 10.1213C8.94973 11.2929 7.05023 11.2929 5.87866 10.1213C4.70709 8.94976 4.70709 7.05027 5.87866 5.87869C7.05023 4.70712 8.94973 4.70712 10.1213 5.87869ZM36.9914 14.364C38.163 15.5356 38.163 17.4351 36.9914 18.6067C35.8198 19.7783 33.9203 19.7783 32.7488 18.6067C31.5772 17.4351 31.5772 15.5356 32.7488 14.364C33.9203 13.1925 35.8198 13.1925 36.9914 14.364ZM18.6067 18.6067C19.7782 17.4351 19.7782 15.5356 18.6067 14.364C17.4351 13.1925 15.5356 13.1925 14.364 14.364C13.1924 15.5356 13.1924 17.4351 14.364 18.6067C15.5356 19.7783 17.4351 19.7783 18.6067 18.6067ZM45.4768 5.87869C46.6483 7.05027 46.6483 8.94976 45.4768 10.1213C44.3052 11.2929 42.4057 11.2929 41.2341 10.1213C40.0626 8.94976 40.0626 7.05027 41.2341 5.87869C42.4057 4.70712 44.3052 4.70712 45.4768 5.87869ZM28.5063 28.5062C30.0684 26.9441 30.0684 24.4114 28.5063 22.8493C26.9442 21.2872 24.4115 21.2872 22.8494 22.8493C21.2873 24.4114 21.2873 26.9441 22.8494 28.5062C24.4115 30.0683 26.9442 30.0683 28.5063 28.5062Z" fill="white"></path>
                </g>
                <defs>
                    <filter id="filter0_d" x="0" y="0" width="51.3555" height="34.6777" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                        <feOffset></feOffset>
                        <feGaussianBlur stdDeviation="2.5"></feGaussianBlur>
                        <feComposite in2="hardAlpha" operator="out"></feComposite>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.6 0"></feColorMatrix>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                    </filter>
                </defs>
            </svg>

            <button class="btn btn-lg anchor-link" data-anchor="main-checkout"><?=  \Yii::t('app', 'замовити зараз') ?></button>
        </div>
    </section>

    <section class="main__checkout step-lang" id="main-checkout">
        <div class="container">
            <?php $form = ActiveForm::begin(['id' => 'checkoutForm', 'action' => Url::to(['/site/order'])]) ?>
                <div class="product-img">
                    <h3>
                        Выберите язык<br>
                        <small>надписи на ободке кольца</small>
                    </h3>

                    <div class="select-lang">
                        <div class="lang-item lang-item-ru">
                            <img class="product-img" width="320" height="320" src="/uploads/love/product-ru.jpg" alt="">

                            <label class="btn btn-success btn-lg">
                                <?= Html::radio(Html::getInputName($order, 'sku'), false, [
                                    'value' => 222,
                                    'class' => 'hidden',
                                    'onchange' => new JsExpression('Checkout.setLang("ru")')
                                ]) ?>

                                На русском
                            </label>
                        </div>

                        <div class="lang-item lang-item-ua">
                            <img class="product-img" width="320" height="320" src="/uploads/love/product-ua.jpg" alt="">

                            <label class="btn btn-success btn-lg">
                                <?= Html::radio(Html::getInputName($order, 'sku'), false, [
                                    'value' => 252,
                                    'class' => 'hidden',
                                    'onchange' => new JsExpression('Checkout.setLang("ua")')
                                ]) ?>

                                Українською
                            </label>
                        </div>
                    </div>
                </div>

                <div class="checkout-form">
                    <div class="side-top">
                        <h3>
                            <small><?= \Yii::t('app', 'для оформлення замовлення') ?></small><br>
                            <?=  \Yii::t('app', 'Оберіть розмір каблучки') ?>
                        </h3>

                        <?= $form->field($order, 'size', ['template' => '{input}'])->radioButtonGroup(array_combine([15, 15.5, 16, 16.5, 17, 17.5, 18, 18.5, 19, 19.5, 20, 20.5, 21], [15, 15.5, 16, 16.5, 17, 17.5, 18, 18.5, 19, 19.5, 20, 20.5, 21]), ['unselect' => null])->label(false) ?>
                    </div>
                    <div class="side-bottom">
                        <div class="buy-button">
                            <?php Modal::begin([
                                'id' => 'checkoutModal',
                                'centerVertical' => true,
                                'toggleButton' => [
                                    'tag' => 'a',
                                    'class' => 'btn btn-success btn-lg',
                                    'label' => \Yii::t('app', 'Замовити')
                                ]
                            ]) ?>

                            <div class="checkout-proceed">
                                <p class="text-muted">
                                    Для оформления заказа укажите ФИО, номер телефона и отделения Новой Почты
                                </p>

                                <?= $form->field($order, 'name')->textInput(['class' => 'form-control input-lg']) ?>

                                <?= $form->field($order, 'surname')->textInput(['class' => 'form-control input-lg']) ?>

                                <?= $form->field($order, 'phone')->textInput(['type' => 'tel', 'class' => 'form-control input-lg']) ?>

                                <?= $form->field($order, 'city')->widget(Select2::className(), [
                                    'options' => [
                                        'multiple' => false,
                                        'placeholder' => '-- Select --'
                                    ],
                                    'pluginOptions' => [
                                        'dropdownParent' => '#checkoutModal',
                                        'allowClear' => true,
                                        'minimumInputLength' => 3,
                                        'language' => [
                                            'errorLoading' => new JsExpression("function () { return 'Waiting for results...'; }"),
                                        ],
                                        'ajax' => [
                                            'url' => Url::to(['/site/search-city']),
                                            'dataType' => 'json',
                                            'data' => new JsExpression('function(params) { return {term:params.term}; }')
                                        ],
                                        'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                                        'templateResult' => new JsExpression('function(result) { return result.text; }'),
                                        'templateSelection' => new JsExpression('function (result) { return result.text; }'),
                                    ],
                                    'pluginEvents' => [
                                        'change.select2' => new JsExpression('function(e) {return Checkout.getWareHouses(e.target.value);}'),
                                        'select2:clear' => new JsExpression('function(e) {return Checkout.clearWareHouses();}')
                                    ],
                                    'bsVersion' => '4.x',
                                    'theme' => Select2::THEME_BOOTSTRAP,
                                    'size' => Select2::LARGE
                                ]) ?>

                                <?= $form->field($order, 'warehouse')->widget(Select2::className(), [
                                    'options' => [
                                        'multiple' => false,
                                        'placeholder' => '-- Select --',
                                        'data-url' => Url::to(['/site/search-warehouse'])
                                    ],
                                    'pluginOptions' => [
                                        'allowClear' => true,
                                        'dropdownParent' => '#checkoutModal'
                                    ],
                                    'bsVersion' => '4.x',
                                    'theme' => Select2::THEME_BOOTSTRAP,
                                    'size' => Select2::LARGE
                                ]) ?>

                                <?= Html::submitButton( \Yii::t('app', 'Оформити замовлення'), ['class' => 'btn btn-success btn-lg']) ?>
                            </div>

                            <?php Modal::end() ?>

                            <div class="price">
                                <span class="old">790</span>
                                670
                                <small>грн</small>

                                <span class="hint">
                                    <strong>+</strong> <?= \Yii::t('app', 'подарункова упаковка у подарунок') ?>
                                </span>
                            </div>
                        </div>

                        <div class="delivery-info">
                            <svg version="1.1" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 127 45" style="enable-background:new 0 0 127 45;" xml:space="preserve">
                                <g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#bcc5d4" d="M65.1,9.2c0,3.8,0,3.8,0,3.8c-5.2,0-5.2,0-5.2,0c0-3.8,0-3.8,0-3.8c0-1.1-0.5-1.6-1.5-1.6c-2.7,0-2.7,0-2.7,0c0,2.5,0,2.5,0,2.5c1.1,0,1.1,0,1.1,0c0.1,0,0.1,0.1,0.1,0.1c0,10.7,0,10.7,0,10.7c2.9,0,2.9,0,2.9,0c0-5.4,0-5.4,0-5.4c5.2,0,5.2,0,5.2,0c0,5.4,0,5.4,0,5.4c2.9,0,2.9,0,2.9,0c0-10.7,0-10.7,0-10.7l0.1-0.1c1.1,0,1.1,0,1.1,0c0-2.5,0-2.5,0-2.5c-2.6,0-2.6,0-2.6,0C65.5,7.6,65.1,8.1,65.1,9.2z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#bcc5d4" d="M76.9,7.4L76.9,7.4c-3.9,0-7.1,3-7.1,6.8c0,3.9,3.1,7,7.1,7H77c0,0,6.9,0,7-7C84,7.4,76.9,7.4,76.9,7.4zM76.9,18.5L76.9,18.5c-2.3,0-4-1.9-4-4.3c0-2.2,1.7-4.1,3.9-4.1h0.1c0,0,3.9-0.1,4,4C81,18.5,76.9,18.5,76.9,18.5z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#bcc5d4" d="M85.7,19.4c0,1,0.5,1.5,1.5,1.5c1.8,0,2.7,0,3.1,0h0.2h0.2c0.1,0,0.1,0,0.1,0c2.8,0,4.8-1.5,4.8-4.1c0-1.3-0.7-2.5-1.8-3c0.6-0.6,1.2-1.4,1.2-2.7c0-2.2-1.6-3.6-4.3-3.6h-0.1h-1.9c-4.1,0-4.1,0-4.1,0c0,2.5,0,2.5,0,2.5c1.2,0,1.2,0,1.2,0S85.7,19.4,85.7,19.4z M88.6,10.2c1,0,1.5,0,1.7,0h0.2l0,0l0,0c0.9,0,1.4,0.5,1.4,1.3c0,0.8-0.5,1.4-1.4,1.4h-0.1h-1c-0.8,0-0.8,0-0.8,0C88.6,10.2,88.6,10.2,88.6,10.2z M88.6,15.3c0.6,0,1,0,1.3,0h0.6l0,0c0.2,0,0.2,0,0.2,0c1,0,1.6,0.6,1.6,1.6s-0.6,1.5-1.6,1.5h-0.3h-0.9c-0.9,0-0.9,0-0.9,0c-0.2,0-0.2,0-0.2-0.1C88.6,15.3,88.6,15.3,88.6,15.3z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#bcc5d4" d="M105.4,19.7c0.2,1,0.7,1.3,1.7,1.3c1.7,0,1.7,0,1.7,0c0-2.6,0-2.6,0-2.6c-0.5,0-0.5,0-0.5,0c-0.2,0-0.2,0-0.4-0.1C104,7.6,104,7.6,104,7.6h-1.5h-0.2c-1.2,0-1.2,0-1.2,0c-3.9,10.6-3.9,10.6-3.9,10.6c-0.1,0.1-0.1,0.1-0.4,0.1c-0.6,0-0.6,0-0.6,0c0,2.6,0,2.6,0,2.6c1.9,0,1.9,0,1.9,0c1,0,1.5-0.4,1.7-1.2c0.8-2.2,0.8-2.2,0.8-2.2c0.5,0,0.9,0,1.3,0h0.6h0.3c1.6,0,1.6,0,1.6,0C105.4,19.7,105.4,19.7,105.4,19.7z M102.5,15.1h-0.2c-1,0-1,0-1,0c1-2.7,1-2.7,1-2.7c0-0.4,0.2-0.7,0.2-1c0.1,0.2,0.2,0.6,0.2,1c1,2.7,1,2.7,1,2.7H102.5z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#bcc5d4" d="M67.8,35.4c0-9,0-9,0-9c0-1-0.6-1.6-1.6-1.6c-10.5,0-10.5,0-10.5,0c0,2.5,0,2.5,0,2.5c1.2,0,1.2,0,1.2,0c0,10.9,0,10.9,0,10.9c2.9,0,2.9,0,2.9,0c0-10.9,0-10.9,0-10.9c4.8,0,4.8,0,4.8,0c0.1,0,0.1,0.2,0.1,0.2c0,9.2,0,9.2,0,9.2c0,1,0.5,1.5,1.6,1.5c2.5,0,2.5,0,2.5,0c0-2.6,0-2.6,0-2.6C67.9,35.5,67.9,35.5,67.8,35.4C67.8,35.5,67.8,35.5,67.8,35.4z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#bcc5d4" d="M78.1,24.7l-1.4-0.2h-0.1c-3.9,0-6.9,3-6.9,6.8c0,3.9,3.1,7,6.9,7h0.1l1.4-0.2c3.3-0.6,5.6-3.4,5.6-6.9C83.7,28.1,81.4,25.3,78.1,24.7z M78.2,35.3l-1.5,0.3h-0.1c-2.2,0-3.9-1.9-3.9-4.3c0-2.2,1.7-4.1,3.9-4.1h0.1l1.5,0.3c1.5,0.6,2.4,2.1,2.4,3.8C80.6,33.2,79.7,34.7,78.2,35.3z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#bcc5d4" d="M98.7,26.4c0,9,0,9,0,9c0,0.1,0,0.1-0.1,0.1c-3.6,0-3.6,0-3.6,0c0-10.7,0-10.7,0-10.7c-2.9,0-2.9,0-2.9,0c0,10.7,0,10.7,0,10.7c-3.6,0-3.6,0-3.6,0c-0.1,0-0.1,0-0.1-0.1c0-9,0-9,0-9c0-1-0.5-1.6-1.5-1.6c-2.7,0-2.7,0-2.7,0c0,2.5,0,2.5,0,2.5c1.1,0,1.1,0,1.1,0c0.1,0,0.1,0.2,0.1,0.2c0,9.2,0,9.2,0,9.2c0,1,0.5,1.5,1.6,1.5c13.1,0,13.1,0,13.1,0c1,0,1.5-0.5,1.5-1.5c0-9.2,0-9.2,0-9.2s0-0.2,0.2-0.2c1.1,0,1.1,0,1.1,0c0-2.5,0-2.5,0-2.5c-2.7,0-2.7,0-2.7,0C99.1,24.8,98.7,25.3,98.7,26.4z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#bcc5d4" d="M115.7,28.5c0-2.2,0-2.2,0-2.2c0-1-0.4-1.4-1.5-1.4c-9.1,0-9.1,0-9.1,0c-1,0-1.4,0.5-1.4,1.4c0,2.2,0,2.2,0,2.2c2.7,0,2.7,0,2.7,0c0-1,0-1,0-1c0-0.2,0-0.2,0.2-0.2c1.7,0,1.7,0,1.7,0c0,10.9,0,10.9,0,10.9c2.9,0,2.9,0,2.9,0c0-10.9,0-10.9,0-10.9c1.7,0,1.7,0,1.7,0c0.2,0,0.2,0,0.2,0.2c0,1,0,1,0,1S115.7,28.5,115.7,28.5z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#bcc5d4" d="M126.7,35.5c-0.2,0-0.2,0-0.4-0.1c-3.9-10.6-3.9-10.6-3.9-10.6h-1.5h-0.2c-1.2,0-1.2,0-1.2,0l0,0c-3.9,10.6-3.9,10.6-3.9,10.6c-0.2,0.1-0.2,0.1-0.4,0.1c-0.6,0-0.6,0-0.6,0c0,2.6,0,2.6,0,2.6c1.9,0,1.9,0,1.9,0c1,0,1.5-0.4,1.7-1.3c0.8-2,0.8-2,0.8-2c0.5,0,0.9,0,1.3,0h0.6h0.3c1.6,0,1.6,0,1.6,0c0.8,2,0.8,2,0.8,2c0.2,1,0.7,1.3,1.7,1.3c1.7,0,1.7,0,1.7,0c0-2.6,0-2.6,0-2.6S126.7,35.5,126.7,35.5z M120.9,32.3h-0.2c-1,0-1,0-1,0c1-2.7,1-2.7,1-2.7c0-0.4,0.1-0.7,0.2-1c0.1,0.2,0.2,0.6,0.2,1c1,2.7,1,2.7,1,2.7H120.9z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#bcc5d4" d="M37.4,13.6c-0.2-0.2-0.4-0.3-0.5-0.3c-0.2,0.1-0.2,0.2-0.2,0.6v17c0,0.3,0.1,0.6,0.2,0.6c0.2,0.1,0.3,0,0.5-0.2c8.3-8.1,8.3-8.1,8.3-8.1c0.5-0.4,0.5-1.1,0-1.6C37.4,13.6,37.4,13.6,37.4,13.6z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#bcc5d4" d="M23.9,0.2L23.3,0h-0.6l-0.6,0.2c-8.6,8.3-8.6,8.3-8.6,8.3C13.2,9,13.4,9.4,14,9.4h3.7c0.6,0,1.1,0.5,1.1,1.1c0,6.2,0,6.2,0,6.2c0,0.6,0.5,1,1.1,1c6.2,0,6.2,0,6.2,0c0.7,0,1.2-0.5,1.2-1c0-6.2,0-6.2,0-6.2c0-0.6,0.5-1.1,1.1-1.1c3.6,0,3.6,0,3.6,0c0.6,0,0.7-0.3,0.4-0.8C23.9,0.2,23.9,0.2,23.9,0.2z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#bcc5d4" d="M8.8,13.3c-8.4,8.2-8.4,8.2-8.4,8.2c-0.5,0.5-0.5,1.2,0,1.6c8.4,8.3,8.4,8.3,8.4,8.3c0.2,0.2,0.5,0.2,0.6,0.2c0.2-0.1,0.2-0.2,0.2-0.6V13.7c0-0.3-0.1-0.5-0.2-0.6C9.2,13,9,13.1,8.8,13.3z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#bcc5d4" d="M31.8,35.6h-3.3c-0.6,0-1-0.5-1-1.2c0-6.6,0-6.6,0-6.6c0-0.6-0.5-1.1-1.2-1.1c-6.2,0-6.2,0-6.2,0c-0.6,0-1.1,0.5-1.1,1.1c0,6.6,0,6.6,0,6.6c0,0.7-0.5,1.2-1.1,1.2c-3.6,0-3.6,0-3.6,0c-0.6,0-0.8,0.3-0.3,0.7c8.3,8.2,8.3,8.2,8.3,8.2c0.2,0.2,0.6,0.4,0.8,0.4c0.3,0,0.6-0.1,0.8-0.4c8.3-8.2,8.3-8.2,8.3-8.2C32.6,36,32.4,35.6,31.8,35.6z"/>
                                </g>
                            </svg>

                            <?=  \Yii::t('app', 'Швидка доставка по всій території України крім тимчасово окупованих АР Крим та окремих районів Донецької та Луганської областей') ?>
                        </div>
                    </div>
                </div>
            <?php ActiveForm::end() ?>
        </div>
    </section>

    <div class="main__instagram">
        <h3>
            <?= Html::img('/img/love/instagram_logo.png', ['alt' => 'Instagram']) ?>
            silverado_jewelry_boutique
        </h3>

        <div class="photos">
            <div class="photo-row">
            <?php for ($i = 1; $i < 10; $i++): ?>
                <div class="photo">
                    <?= Html::img('/uploads/love/insta-' . $i . '.jpeg') ?>
                </div>
            <?php if ($i % 3 == 0 && $i < 9): ?>
            </div>
            <div class="photo-row">
            <?php endif;?>
            <?php endfor;?>
            </div>
        </div>

        <p class="follow-message">
            Больше украшений в нашем <strong>Instagram</strong>
        </p>

        <a href="https://instagram.com/silverado_jewelry_boutique" rel="nofollow" target="_blank" class="btn btn-default btn-follow">
            <img src="/img/love/add.png" alt="Follow us">
            подписаться
        </a>
    </div>

    <?php if (false): ?>
    <section class="main__goods">
        <h3><?=  \Yii::t('app', 'Чому варто <strong>купити каблучку для заручин?</strong>') ?></h3>

        <div class="container">
            <?= $this->render('_goods-' . \Yii::$app->language) ?>
        </div>
    </section>
    <?php endif;?>

    <footer class="main_footer">
        <div class="container">
            <p><?=  \Yii::t('app', 'Замовити каблучку для заручин онлайн<br>або за телефоном') ?></p>

            <a href="tel:<?= \Yii::$app->params['adminPhone'] ?>" class="phone"><?= PhoneHelper::format(\Yii::$app->params['adminPhone'], PhoneHelper::PHONE_FORMAT_SHORT_PRINT) ?></a>

<?php if (false): ?>
            <btn class="btn btn-lg btn-callback"><?=  \Yii::t('app', 'замовити зворотній дзвінок') ?></btn>
<?php endif;?>

            <p class="notice"><?=  \Yii::t('app', 'Для оформлення замовлення по телефону<br>необхідно вказати розмір каблучки, населений пункт та номер відділення Нової Пошти<br>ПІБ та номер телефону отримувача посилки') ?></p>

            <p class="copyright">
                <img src="/img/love/logo-top.svg" alt="Silverado" width="186"><br>
                © <?= date('Y') ?>
            </p>
        </div>
    </footer>
</main>