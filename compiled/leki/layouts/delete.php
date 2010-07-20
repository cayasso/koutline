<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?>﻿<div class="box">

<h2>Pages</h2>

<p><strong><?php echo __('Are you sure you want to delete this :name?',array(':name' => $name)); ?></strong> <span class="small"><?php echo __('This is not reversible!'); ?></span></p>

<?php echo Form::open(); ?>
	<?php echo form::submit('submit',__('Yes, delete it.'),array('class'=>'submit')); ?>
	<a href="<?php echo $base_url; ?>cms/<?php echo $page; ?>"><?php echo __("No cancel"); ?></a>
<?php echo Form::close(); ?>

</div><!-- /.box --><?php $_ = OutlineRuntime::finish(__FILE__); ?>