<?php

namespace app\controllers;

use app\models\Device;
use yii\data\Pagination;
use yii\web\Controller;

class DeviceController extends Controller
{
    public function actionIndex()
    {
//        $devices = Device::find()->all();
        $query = Device::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 100]);
        $devices = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('devices', 'pages'));
    }
}