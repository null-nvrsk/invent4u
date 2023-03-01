<?php include 'foo.php' ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#create">
                <i class="fa fa-plus"></i>
            </button>
            <table class="table table-striped table-hover mt-2">
                <thead class="table-dark">
                <th>№</th>
                <th>Тип</th>
                <th>Модель</th>
                <th>Характеристики</th>
                <th>Серийный номер</th>
                <th>Инвентарный номер</th>
                <th>Дата установки</th>
                <th>Работоспособность</th>
                <th style="min-width: 110px;">Действия</th>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Моноблок</td>
                    <td>Lenovo IdeaCentre AIO 3 24ALC6</td>
                    <td>Ryzen 3 5300U 2.6 ГГц/8 ГБ SO-DIMM DDR4/256 ГБ M.2/24" IPS (1920x1080)</td>
                    <td></td>
                    <td>НН-10/2022-00193</td>
                    <td>01.10.2022</td>
                    <td>OK</td>
                    <td>
                        <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal create -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Добавить запись</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <small>Тип</small>
                        <input type="text" name="type" class="form-control">
                    </div>

                    <div class="form-group">
                        <small>Модель</small>
                        <input type="text" name="model" class="form-control">
                    </div>

                    <div class="form-group">
                        <small>Характеристики</small>
                        <input type="text" name="specification" class="form-control">
                    </div>

                    <div class="form-group">
                        <small>Серийный номер</small>
                        <input type="text" name="sn" class="form-control">
                    </div>

                    <div class="form-group">
                        <small>Инвентарный номер</small>
                        <input type="text" name="inventory_number" class="form-control">
                    </div>

                    <div class="form-group">
                        <small>Дата установки</small>
                        <input type="text" name="install_date" class="form-control">
                    </div>

                    <div class="form-group">
                        <small>Работоспособность</small>
                        <input type="text" name="workable" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                    <button type="submit" class="btn btn-primary" name="add">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal create -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
</html>