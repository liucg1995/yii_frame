<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hehe".
 *
 * @property int $id
 * @property string $nm
 */
class Hehe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hehe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nm'], 'd', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nm' => 'Nm',
        ];
    }
}
