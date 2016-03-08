<?php
/**
 * @var $this View
 *
 * @author Bogdan Savluk <savluk.bogdan@gmail.com>
 */
use yii\helpers\Html;
use yii\web\View;

?>
<?php echo Html::beginTag('div', $this->context->options); ?>

    <?php echo Yii::t('galleryManager/main', 'Can not upload images for new record'); ?>

<?php echo Html::endTag('div'); ?>
