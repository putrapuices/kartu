<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class MetronicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
       
       


        "themes/metronic/default/dist/default/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css",
         "themes/metronic/default/dist/default/assets/vendors/base/vendors.bundle.css",
        "themes/metronic/default/dist/default/assets/demo/default/base/style.bundle.css",



        // "themes/metronic/default/dist/default/assets/vendors/custom/datatables/datatables.bundle.css",
        // "themes/metronic/default/dist/default/assets/vendors/custom/jquery-ui/jquery-ui.bundle.css",
        // "themes/metronic/default/dist/default/assets/vendors/custom/jqvmap/jqvmap.bundle.css",
    ];
    public $js = [
        "themes/metronic/default/dist/default/assets/vendors/base/vendors.bundle.js",
        "themes/metronic/default/dist/default/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js",
        "themes/metronic/default/dist/default/assets/demo/default/base/scripts.bundle.js",
        "themes/metronic/default/dist/default/assets/app/js/dashboard.js",


        // "themes/metronic/default/dist/assets/vendors/custom/datatables/datatables.bundle.js",
        // "themes/metronic/default/dist/assets/vendors/custom/flot/flot.bundle.js",
        // "themes/metronic/default/dist/assets/vendors/custom/gmaps/gmaps.js",
        // "themes/metronic/default/dist/assets/vendors/custom/jquery-ui/jquery-ui.bundle.js",
        // "themes/metronic/default/dist/assets/vendors/custom/jqvmap/jqvmap.bundle.js",





    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
