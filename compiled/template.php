<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="<?php echo $keywords; ?>"/>
<meta name="description" content="<?php echo $description; ?>"/>

<title><?php echo $name; ?>: <?php echo $title; ?></title>

<link rel="icon" href="<?php echo $base_url; ?>media/imgs/icons/favicon.ico" type="image/x-icon" />

<?php echo $styles; ?>

<script>


var site = {	


base_url: 		'<?php echo $base_url; ?>',
current_url: 	'<?php echo $current_url; ?>',
page: 			'<?php echo $active_page; ?>',
referrer_url: 	''	

}


</script>



</head>
<body>

<div id="drawer">[ERROR MESSAGE]</div>

<?php echo $header; ?>

<div class="nav">
  <ul>
    <?php foreach ($navigation as $nav) { ?>
    <li <?php if ($nav->uri == $active_page) { ?> class="current"<?php } ?>><a href="<?php echo $base_url; echo $nav->uri; ?>" title="<?php echo __('Section'); ?> <?php echo $nav->title; ?>"><?php echo $nav->title; ?></a></li>
    <?php } ?>
  </ul>
</div><!-- /.nav -->

<div class="breadcrumb">
  <ul>
    <li class="home"><a href="<?php echo $site_url; echo __('home'); ?>" title="<?php echo __('Back to Home'); ?>"></a></li>
    <?php echo $breadcrumbs; ?>
  </ul>
</div><!-- /.breadcrumb -->

<div id="content-wrapper">
 
  <div id="content">
  	<?php echo $content; ?>
    <?php echo $sidebar; ?>
  </div><!-- /#content -->
  
</div><!-- /#content-wrapper -->

<?php echo $footer; ?>
<?php echo $scripts; ?>
</body>
</html><?php $_ = OutlineRuntime::finish(__FILE__); ?>