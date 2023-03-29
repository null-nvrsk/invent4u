<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
        '../../plugins/fontawesome-free/css/all.min.css',
        '../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',
        '../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
        '../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
        '../../dist/css/adminlte.min.css',
    ];
    public $js = [
//        '../../plugins/jquery/jquery.min.js',

        '../../plugins/bootstrap/js/bootstrap.bundle.min.js',
        '../../plugins/datatables/jquery.dataTables.min.js',
        '../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
        '../../plugins/datatables-responsive/js/dataTables.responsive.min.js',
        '../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js',
        '../../plugins/datatables-buttons/js/dataTables.buttons.min.js',
        '../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js',
        '../../plugins/jszip/jszip.min.js',
        '../../plugins/pdfmake/pdfmake.min.js',
        '../../plugins/pdfmake/vfs_fonts.js',
        '../../plugins/datatables-buttons/js/buttons.html5.min.js',
        '../../plugins/datatables-buttons/js/buttons.print.min.js',
        '../../plugins/datatables-buttons/js/buttons.colVis.min.js',
        '../../dist/js/adminlte.min.js',
        '../../dist/js/demo.js',

        '../../js/dataTables.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap5\BootstrapAsset'
    ];
}
