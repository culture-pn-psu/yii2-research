<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model culturePnPsu\research\models\ResearchPerson */

$this->title = Yii::t('culture\research', 'Update {modelClass}: ', [
    'modelClass' => 'Research Person',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('culture\research', 'Research People'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('culture\research', 'Update');
?>
<div class="research-person-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
