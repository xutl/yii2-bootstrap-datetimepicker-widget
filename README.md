# yii2-bootstrap-datetimepicker-widget

```php
<?= $form->field($model, 'start_time')->widget(DatetimePicker::className(), [
    //'inline' => true,
    'datetimeFormat' => 'php:Y-m-d H:i',
    'clientDatetimeFormat'=>'yyyy-mm-dd hh:ii',
    'options' => [
        'class' => 'form-control',
    ]
]) ?>
```