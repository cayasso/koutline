<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><p> 
	<?php echo Form::label($name, ucfirst(__($label))); ?>
	<?php echo $field; ?>
	<?php echo $errors; ?>
</p><?php $_ = OutlineRuntime::finish(__FILE__); ?>