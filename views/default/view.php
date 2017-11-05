<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model culturePnPsu\research\models\Research */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('culture\research', 'Researches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="research-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('culture\research', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('culture\research', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('culture\research', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'abstract:ntext',
            'fiscal_year',
            'fiscal',
            'support_from',
            'is_intranet',
            'start_date',
            'end_date',
            'status',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
        ],
    ]) ?>

</div>
