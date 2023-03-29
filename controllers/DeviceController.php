<?php

namespace app\controllers;

use app\models\Device;
use yii\web\Controller;

class DeviceController extends Controller
{
    public function actionIndex()
    {
        $devices = Device::find()->all();
        return $this->render('index', compact('devices'));
    }
}