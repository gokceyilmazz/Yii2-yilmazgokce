<?php
?>

    <?php echo \yii\bootstrap4\Nav::widget([



            'options' => [
                'class' => 'd-flex flex-column nav-pills shadow-sm'
            ],
        'items' => [
                [
                    'label' => 'Ana Sayfa',
                    'url' => ['/content/index']
                ]

            ]

    ]) ?>

