
<?php
include '_styles.php'; // Adjust the filename based on your actual filename
?>

<?php
/* @var $this ExerciseController */
/* @var $model Exercise */
/* @var $form CActiveForm */

// Check if link is present
$linkPresent = true; // Replace with your actual condition

// Set CSS class based on link presence
$linkClass = $linkPresent ? 'yellow-link' : '';
?>

<div class="form" id="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'exercise-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" id="volunteer">
    <?php echo $form->labelEx($model, 'volunteer'); ?>

    <label>
        <?php echo $form->radioButton($model, 'volunteer', array('value' => 'ant')); ?>
        Ant
    </label>

    <label>
        <?php echo $form->radioButton($model, 'volunteer', array('value' => 'sparrow')); ?>
        Sparrow
    </label>

    <label>
        <?php echo $form->radioButton($model, 'volunteer', array('value' => 'elephant')); ?>
        Elephant
    </label>

    <?php echo $form->error($model, 'volunteer'); ?>
</div>
	<div class="row" >
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profession'); ?>
		<?php echo $form->textField($model,'profession',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'profession'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remark'); ?>
		<?php echo $form->textField($model,'remark',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'remark'); ?>
	</div>
        <!-- Apply the CSS class to your link -->
<a href="#" class="<?php echo $linkClass; ?>">statment</a>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'JOIN'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->