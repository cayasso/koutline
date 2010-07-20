<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?>
	<h2><?php echo __('Update'); ?></h2>
	
	<div class="box">
	
	<form id="form-post" method="post" action="<?php echo $current_url; ?>">	

	    <?php echo $field->title; ?>		
		<?php echo $field->content; ?>		

		<p><a href="#">Post options</a></p>

		<?php echo $field->status; ?>		
		<?php echo $field->language; ?>
	
		
		
		<?php echo Form::submit('submit', 'Submit'); ?>	
	</form>
	
	</div><!-- /.box --><?php $_ = OutlineRuntime::finish(__FILE__); ?>