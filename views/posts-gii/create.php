<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PostsGii */

$this->title = 'Создать новую запись';
$this->params['breadcrumbs'][] = ['label' => 'Posts Giis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-gii-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
