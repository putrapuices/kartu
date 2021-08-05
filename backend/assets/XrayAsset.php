<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class XrayAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',

        'themes2/css/bootstrap.min.css', 
        'themes2/css/typography.css', 
        'themes2/css/style.css', 
        'themes2/css/responsive.css', 
        'themes2/fullcalendar/core/main.css', 
        'themes2/fullcalendar/daygrid/main.css', 
        'themes2/fullcalendar/timegrid/main.css', 
        'themes2/fullcalendar/list/main.css', 
        'themes2/css/flatpickr.min.css', 
    ];
    public $js = [

         // 'themes2/js/jquery.min.js',
        'themes2/js/popper.min.js',
        'themes2/js/bootstrap.min.js',
        'themes2/js/jquery.appear.js',
        'themes2/js/countdown.min.js',
        'themes2/js/waypoints.min.js',
        'themes2/js/jquery.counterup.min.js',
        'themes2/js/wow.min.js',
        'themes2/js/apexcharts.js',
        'themes2/js/slick.min.js',
        // 'themes2/js/select2.min.js',
        'themes2/js/owl.carousel.min.js',
        'themes2/js/jquery.magnific-popup.min.js',
        'themes2/js/smooth-scrollbar.js',
        'themes2/js/lottie.js',
        'themes2/js/core.js',
        'themes2/js/charts.js',
        'themes2/js/animated.js',
        'themes2/js/kelly.js',
        'themes2/js/flatpickr.js',
        'themes2/js/chart-custom.js',
        'themes2/js/custom.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
