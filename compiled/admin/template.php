<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><!DOCTYPE html>
<html lang="<?php echo $ll; ?>">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="<?php echo $keywords; ?>"/>
<meta name="description" content="<?php echo $description; ?>"/>

<title>$title</title>

<link rel="icon" href="<?php echo url::base(); ?>media/imgs/icons/favicon.ico" type="image/x-icon" />


<?php echo $styles; ?>

<script>


var site = {	


base_url: 		'<?php echo $base_url; ?>',
current_url: 	'<?php echo $current_url; ?>',
page: 			'<?php echo $page; ?>',
referrer_url: 	'<?php echo Session::instance()->get("current_url"); ?>'
	

}


</script>

</head>
<body>

<?php echo $header; ?>
<?php echo $content; ?>
<?php echo $footer; ?>
<?php echo $scripts; ?>
</body>
</html><?php $_ = OutlineRuntime::finish(__FILE__); ?>