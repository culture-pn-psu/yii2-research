<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model culturePnPsu\research\models\Research */

$this->title = Yii::t('culture\research', 'Create Research');
$this->params['breadcrumbs'][] = ['label' => Yii::t('culture\research', 'Researches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="research-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
