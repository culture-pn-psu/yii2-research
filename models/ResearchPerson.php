<?php

namespace culturePnPsu\research\models;

use Yii;

/**
 * This is the model class for table "research_person".
 *
 * @property integer $id
 * @property integer $prefix_id
 * @property string $name
 * @property string $surname
 * @property string $tel
 * @property string $address
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 */
class ResearchPerson extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'research_person';
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
            [['prefix_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['name', 'surname', 'address'], 'string', 'max' => 100],
            [['tel'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('culture\research', 'ID'),
            'prefix_id' => Yii::t('culture\research', 'Prefix ID'),
            'name' => Yii::t('culture\research', 'Name'),
            'surname' => Yii::t('culture\research', 'Surname'),
            'tel' => Yii::t('culture\research', 'Tel'),
            'address' => Yii::t('culture\research', 'Address'),
            'created_at' => Yii::t('culture\research', 'Created At'),
            'created_by' => Yii::t('culture\research', 'Created By'),
            'updated_at' => Yii::t('culture\research', 'Updated At'),
            'updated_by' => Yii::t('culture\research', 'Updated By'),
        ];
    }
}
