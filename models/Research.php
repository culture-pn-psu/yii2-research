<?php

namespace culturePnPsu\research\models;

use Yii;

/**
 * This is the model class for table "research".
 *
 * @property integer $id
 * @property string $title
 * @property string $abstract
 * @property string $fiscal_year
 * @property string $fiscal
 * @property string $support_from
 * @property integer $is_intranet
 * @property string $start_date
 * @property string $end_date
 * @property integer $status
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 */
class Research extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'research';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('research_db');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'abstract', 'fiscal_year', 'fiscal', 'support_from', 'is_intranet', 'start_date', 'end_date', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['abstract'], 'string'],
            [['fiscal_year', 'start_date', 'end_date'], 'safe'],
            [['fiscal'], 'number'],
            [['is_intranet', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['title', 'support_from'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('culture\research', 'ID'),
            'title' => Yii::t('culture\research', 'Title'),
            'abstract' => Yii::t('culture\research', 'Abstract'),
            'fiscal_year' => Yii::t('culture\research', 'Fiscal Year'),
            'fiscal' => Yii::t('culture\research', 'Fiscal'),
            'support_from' => Yii::t('culture\research', 'Support From'),
            'is_intranet' => Yii::t('culture\research', 'Is Intranet'),
            'start_date' => Yii::t('culture\research', 'Start Date'),
            'end_date' => Yii::t('culture\research', 'End Date'),
            'status' => Yii::t('culture\research', 'Status'),
            'created_at' => Yii::t('culture\research', 'Created At'),
            'created_by' => Yii::t('culture\research', 'Created By'),
            'updated_at' => Yii::t('culture\research', 'Updated At'),
            'updated_by' => Yii::t('culture\research', 'Updated By'),
        ];
    }
}
