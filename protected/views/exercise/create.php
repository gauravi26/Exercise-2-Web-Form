    <?php
/* @var $this ExerciseController */
/* @var $model Exercise */

$this->breadcrumbs=array(
	'Exercises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Exercise', 'url'=>array('index')),
	array('label'=>'Manage Exercise', 'url'=>array('admin')),
);
?>

<h1>
        <span class="join-the">JOIN THE</span>
        <span class="chain-for-childrens-cheer"> CHAIN-FOR-CHILDREN'S-CHEER</span>
        
    </h1>
<p style="font-size: 16px;" >
    Please read the <a href="http://localhost/Exercise2/index.php?r=exercise/statement" style="text-decoration: underline; color: #fbab45; font-size: 20px;" >statement</a> before joining.
</p>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>