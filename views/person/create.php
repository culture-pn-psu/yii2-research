<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model culturePnPsu\research\models\ResearchPerson */

$this->title = Yii::t('culture\research', 'Create Research Person');
$this->params['breadcrumbs'][] = ['label' => Yii::t('culture\research', 'Research People'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="research-person-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
