<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><span class="error" id="field-<?php echo $name; ?>-error">	
<?php foreach ($errors as $error) { ?>
<?php echo $error; ?>
<?php } ?>
</span>
<?php $_ = OutlineRuntime::finish(__FILE__); ?>