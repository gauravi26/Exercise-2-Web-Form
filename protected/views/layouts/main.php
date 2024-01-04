<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <style>
            #header{
                
                text-align: center;
            }
        </style>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Join', 'url'=>array('/exercise/create')),
				array('label'=>'View Members', 'url'=>array('/exercise/list')),
				array('label'=>'Statement', 'url'=>array('/exercise/statement')),
				),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	
        <div id="footer" style="background-color :#303030; text-align: center; color : grey; font-size: 15px; font-weight:bold; width: 1500px; padding :0px; margin: 0px" >
 
    Contact us:<br/>
    Join Telegram channel: <a href="https://t.me/u5india" target="_blank">https://t.me/u5india</a><br/>
    Email: <a href="happy22kids@happy22kids.org" style="font-size: 18px; color:yellowgreen ;">happy22kids@happy22kids.org </a><br/>
</div><!-- footer -->



</div><!-- page -->

</body>
</html>
