<?php  echo CHtml::beginForm('','post',array('enctype'=>'application/x-www-form-urlencoded')); ?>

<?php echo CHtml::errorSummary($model); ?>

<?php $this->widget('CTabView',array(
	'id'=>'formTabs',
	'tabs'=>array(
		't1'=>array(
			'title'=>'Основное',
			'view'=>'form/tabs/main'
		),
	),
	'viewData'=>array('model'=>$model,'type'=>$view),
));?>

<div class="simple action">
<?php $this->renderPartial('application.views.forms.buttonsets.savecancel');?>
</div>

<?php echo CHtml::endForm(); ?>
<!-- form -->