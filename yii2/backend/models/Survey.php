<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "survey".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $created_on
 * @property integer $created_by_user
 *
 * @property User $id0
 */
class Survey extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'survey';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'created_on', 'created_by_user'], 'required'],
            [['description'], 'string'],
            [['created_on'], 'safe'],
            [['created_by_user'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'created_on' => 'Created On',
            'created_by_user' => 'Created By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
}
