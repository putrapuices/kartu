<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->registerJs('

    $("#input_id_kel").attr("disabled",true);
    $("#input_id_kec").change(function() {
        $.get("'.Url::to(['get-cities','id_kec'=>'']).'" + $(this).val(), function(data) {
            select = $("#input_id_kel")
            select.empty();
            var options = "<option value=\'\'>-Choose a kelurahan/desa/nagari-</option>";
            $.each(data.cities, function(key, value) {
                options += "<option value=\'"+value.id+"\'>"+ value.name +"</option>";
                });
                select.append(options);
                $("#input_id_kel").attr("disabled",false);
                });
                });


    $("#input_id_dusun").attr("disabled",true);
    $("#input_id_kel").change(function() {
        $.get("'.Url::to(['get-dusun','id_kel'=>'']).'" + $(this).val(), function(data) {
            select = $("#input_id_dusun")
            select.empty();
            var options = "<option value=\'\'>-Choose a dusun/korong/rt-</option>";
            $.each(data.dusun, function(key, value) {
                options += "<option value=\'"+value.id+"\'>"+ value.name +"</option>";
                });
                select.append(options);
                $("#input_id_dusun").attr("disabled",false);
                });
                });
 
                ');
    ?>