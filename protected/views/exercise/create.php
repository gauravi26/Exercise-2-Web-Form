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
<?php $this->renderPartial('_form', array('model'=>$model)); ?>