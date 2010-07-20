<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><?php echo $flash_message; ?>
<?php echo Form::open($action, $attributes); ?>
	<?php foreach ($elements as $element) { ?>
		<?php echo $element; ?>
	<?php } ?>
		<p><?php echo Form::submit('submit', 'Submit'); ?></p>
<?php echo Form::close(); $_ = OutlineRuntime::finish(__FILE__); ?>