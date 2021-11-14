<?php

use yii\bootstrap4\Modal;
?>

<?php Modal::begin([
    'centerVertical' => true,
    'toggleButton' => [
        'tag' => 'a',
        'class' => 'btn btn-link',
        'label' => 'не знаєте розмір?'
    ]
]) ?>

test

<?php Modal::end() ?>
