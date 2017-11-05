<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model culturePnPsu\research\models\Research */

$this->title = Yii::t('culture\research', 'Update {modelClass}: ', [
    'modelClass' => 'Research',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('culture\research', 'Researches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('culture\research', 'Update');
?>
<div class="research-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
