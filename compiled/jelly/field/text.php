<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); ?><?php echo Form::textarea($name, $value, $attributes + array(
	'id' => 'field-'.$name,
	'rows' => 8,
	'cols' => 40,
)); ?><?php $_ = OutlineRuntime::finish(__FILE__); ?>