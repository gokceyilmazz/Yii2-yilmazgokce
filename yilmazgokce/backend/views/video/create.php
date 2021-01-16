<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = 'Video Yükle';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div>
        <p>Yüklemek istediğiniz dosyayı seçiniz</p>

        <?php \yii\bootstrap4\ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data']
        ])  ?>
        <button class="btn btn-primary btn-file">
            Dosya Seçiniz
            <input type="file" id="videoFile" name="video">
        </button>
        <?php \yii\bootstrap4\ActiveForm::end()?>
    </div>
</div>
