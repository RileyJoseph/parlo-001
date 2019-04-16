<?php
/**
 * @var $model app\forms\contactForm
 * @var $handle string
 */
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
// Start ajax handling of the form
Pjax::begin(['enablePushState' => false, 'id' => 'pjax-'.$handle]);
// Start active form
$form = ActiveForm::begin([
    'action' => \craft\helpers\UrlHelper::actionUrl('dolphiq-craft3-forms/main/index', ['handle' => $handle]),
    'method' => 'POST',
    'options' => [
        'data-pjax' => true,
    ],
]);
?>

<div class="form__left">
  <?= $form->field($model, 'fullname')->textInput(); ?>
  <?= $form->field($model, 'phone')->textInput(); ?>
  <?= $form->field($model, 'email')->textInput(); ?>
</div>
<div class="form__right">
  <?= $form->field($model, 'message')->textarea(); ?>
</div>

    <div>
        <button type="submit">
            <?= Craft::t('site', 'SUBMIT'); ?>
        </button>
    </div>


<?php
  // End active form
  ActiveForm::end();
  // End ajax handling
  Pjax::end();