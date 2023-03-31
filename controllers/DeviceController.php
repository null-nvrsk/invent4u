<?php

namespace app\controllers;

use app\models\Device;
use yii\data\Pagination;
use yii\web\Controller;

class DeviceController extends Controller
{
    public function actionIndex()
    {
        $query = Device::find();
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 20,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        $devices = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('devices', 'pages'));
    }
}