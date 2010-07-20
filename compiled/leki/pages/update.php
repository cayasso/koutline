<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?>﻿<h2>Pages</h2>

<div class="grid_11">

<form id="form-page" method="post" action="<?php echo $current_url; ?>">

    <p class="form-field">
	<?php echo $field->title; ?>
	</p>
	
	<p class="form-field">
	<?php echo $field->uri; ?>
	</p>
	
	<p class="form-field">
	<?php echo $field->status; ?>
	</p>
	
	<p class="form-field">
	<?php echo $field->language; ?>
	</p>
	
	<p class="form-field">
	<?php echo $field->menu_active; ?>
	</p>
	
	<p class="form-field">
	<?php echo $field->menu_weight; ?>
	</p>               

	<p><?php echo Form::submit('submit', 'Submit'); ?></p>
	
</form>

</div><!-- /.grid_11 --><?php $_ = OutlineRuntime::finish(__FILE__); ?>