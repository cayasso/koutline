<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><ul>
<?php foreach ($pages as $page) { ?>
	<li>
	<?php echo $page->title; ?>	
	<li>
<?php } ?>
</ul><?php $_ = OutlineRuntime::finish(__FILE__); ?>