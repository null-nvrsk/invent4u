<?php

namespace app\models;

use yii\db\ActiveRecord;

class DeviceType extends ActiveRecord
{
    public static function tableName()
    {
        return 'device_type';
    }
}