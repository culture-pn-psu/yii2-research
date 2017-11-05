<?php

namespace culturePnPsu\research\models;

use Yii;

/**
 * This is the model class for table "research_person_jion".
 *
 * @property integer $research_id
 * @property integer $research_person_id
 * @property integer $status
 */
class ResearchPersonJion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'research_person_jion';
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
            [['research_id', 'research_person_id'], 'required'],
            [['research_id', 'research_person_id', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'research_id' => Yii::t('culture\research', 'Research ID'),
            'research_person_id' => Yii::t('culture\research', 'Research Person ID'),
            'status' => Yii::t('culture\research', 'Status'),
        ];
    }
}
