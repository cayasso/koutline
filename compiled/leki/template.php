<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><!DOCTYPE html>
<html class="no-js" lang="<?php echo $ll; ?>" xmlns="http://www.w3.org/1999/xhtml">

<head>

<script>
(function(h,c){ h[c]=h[c].replace(/\bno-js\b/, 'js')})(document.documentElement, 'className')
</script>

<!--[if lt IE 9]>
<script src="<?php echo url::base(); ?>media/js/html5.js"></script>
<![endif]-->

<meta charset="utf-8" />
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

<div id="content" class="container_16">
<?php echo $content; ?>
</div>		

<?php echo $footer; ?>
<?php echo $scripts; ?>
</body>
</html><?php $_ = OutlineRuntime::finish(__FILE__); ?>