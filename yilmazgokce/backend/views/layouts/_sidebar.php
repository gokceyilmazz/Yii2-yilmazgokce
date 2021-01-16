<?php
?>

    <?php echo \yii\bootstrap4\Nav::widget([
        'options' => [
            'class' => 'd-flex flex-column nav-pills shadow-sm'
        ],
        'items' => [
            [
                'label' => 'Panel',
                'url' => ['/site/index']
            ],
            [
                'label' => 'İçerik',
                'url'=> ['/content/index']
            ],
            [
                'label' => 'Videolar',
                'url'=> ['/video/index']
            ]
        ]
    ]) ?>


