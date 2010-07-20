<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?>﻿<h2>Log In</h2>

<div class="grid_5">

<form id="form-post" method="post" action="<?php echo $current_url; ?>">

    <p class="form-field">
	<?php echo $field->username; ?>
	</p>
	
	<p class="form-field">
	<?php echo $field->password; ?>
	</p>		     

	<p><?php echo Form::submit('submit', 'Submit'); ?></p>

</form>
</div><!-- /.grid_12 -->

<?php $_ = OutlineRuntime::finish(__FILE__); ?>