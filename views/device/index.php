<?php

/** @var yii\web\View $this */

$this->title = Yii::$app->name." | DataTables";
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Тип</th>
                                <th>Модель</th>
                                <th>Характеристики</th>
                                <th>Серийный номер</th>
                                <th>Инвентарный номер</th>
                                <th>Дата установки</th>
                                <th>Работоспособность</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($devices as $device): ?>
                            <tr>
                                <td><?= $device->id ?></td>
                                <td><?= $device->deviceType->name ?></td>
                                <td><?= $device->model ?></td>
                                <td><?= $device->specification ?></td>
                                <td><?= $device->sn ?></td>
                                <td><?= $device->inventory_number ?></td>
                                <td> <?= Yii::$app->formatter->asDate($device->install_date) ?>
                                </td>
                                <td><?= $device->workable_id ?></td>
                            </tr>
                            <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>№</th>
                                <th>Тип</th>
                                <th>Модель</th>
                                <th>Характеристики</th>
                                <th>Серийный номер</th>
                                <th>Инвентарный номер</th>
                                <th>Дата установки</th>
                                <th>Работоспособность</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
