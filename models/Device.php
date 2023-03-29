<?php

namespace app\models;

use yii\db\ActiveRecord;

class Device extends ActiveRecord
{
    public static function tableName()
    {
        return 'device';
    }

    public function getDeviceType()
    {
        return $this->hasOne(DeviceType::class, ['id' => 'device_type_id']);
    }
}