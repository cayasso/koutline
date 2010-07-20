<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); ?><?php echo Form::select($name, array(
	$true	=> $label_true,
	$false	=> $label_false,
), $value ? $true : $false, $attributes + array('id' => 'field-'.$name)); ?><?php $_ = OutlineRuntime::finish(__FILE__); ?>