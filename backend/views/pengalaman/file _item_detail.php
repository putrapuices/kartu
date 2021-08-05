<td class="col-lg-1">
    <?= isset($model->siswa)?$model->siswa->nama:''?>
</td>
<td class="col-lg-2">
    <?= Html::activeTextInput($model, "[$key]nilai", ['data-field' => 'price', 'size' => 16, 'id' => false, 'class' => 'form-control ',]) ?>
</td>