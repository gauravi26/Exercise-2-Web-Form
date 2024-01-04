
<style>
    img {
        
        width: 26%;
            max-width: 100%;
    height: auto;
    margin: 0;
    padding: 0;
    border: none;
    line-height: normal;
    vertical-align: middle;

        
        
    }
</style>
    
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

	<?php echo $form->errorSummary($model); ?>
<p>I would like to join the <span style="color: blue;">Chain-for-Children's-Cheer</span>, and also encourage others to join and grow the chain.</p>

        <div class="row" id="volunteer">
        <?php echo $form->labelEx($model, 'volunteer'); ?>
<br>
        <label>
            <?php
            echo $form->radioButton($model, 'volunteer', array('value' => 'ant', 'uncheckValue' => null));
            echo CHtml::image(Yii::app()->baseUrl . '/images/ant.jpg', 'Ant Image');
           echo '<li>';
            echo '<p>An Active Ant</p>';
            echo '<p>I will Arise and Awaken at least 2 people <br> to join the chain</p>';
            echo '</li>';

            ?>
        </label>

        <label>
    <?php
    echo $form->radioButton($model, 'volunteer', array('value' => 'sparrow', 'uncheckValue' => null));
    echo CHtml::image(Yii::app()->baseUrl . '/images/sparrow.jpg', 'Sparrow Image');
    echo '<li>';
    echo '<p>A Speedy Sparrow</p>';
    echo '<p>I will Spread the Spirit to at least 5 people <br> to join the chain</p>';
    echo '</li>';
    ?>
</label>

<label>
    <?php
    echo $form->radioButton($model, 'volunteer', array('value' => 'elephant', 'uncheckValue' => null));
    echo CHtml::image(Yii::app()->baseUrl . '/images/elephant.jpg', 'Elephant Image');
    echo '<li>';
    echo '<p>An Electric Elephant</p>';
    echo '<p>I will Enthuse and Enlighten at least 20 people <br> to join the chain</p>';
    echo '</li>';
    ?>
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
		<?php echo $form->labelEx($model,'email (will NOT be displayed/shared)'); ?>
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

<p style="font-size: 16px; text-align: justify;">
   Privacy policy: Please read the<br> <a href="http://localhost/Exercise2/index.php?r=exercise/statement" style="text-decoration: underline; color: #fbab45; font-size: 20px;">statement</a> before joining.
    By<br> submitting this form, you agree<br> that your submitted information <br>(except contact information) will<br> be stored and> displayed on the <br> website.
    Contact information will <br>NOT be displayed or passed on.
</p>

	<div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Join' : 'Save', array('title' => 'Join')); ?>
                    <?php echo CHtml::resetButton('Reset', array('class' => 'reset-button')); ?>

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->