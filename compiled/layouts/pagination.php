<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?>
<p class="pagination">

	<?php if ($first_page !== FALSE) { ?>	
		<a href="<?php echo $page->url($first_page); ?>"> &raquo; <?php echo __('First'); ?></a>		
	<?php } else { ?>
		&laquo; <?php echo __('First'); ?>		
	<?php } ?>
	
	<?php if ($previous_page) { ?>		
		<a href="<?php echo $page->url($previous_page); ?>"> &laquo; <?php echo __('Previous'); ?></a>		
	<?php } else { ?>		
		&laquo; <?php echo __('Previous'); ?>		
	<?php } ?>

	<?php $outline_for_i = new OutlineIterator(1, $total_pages, 1); while ($outline_for_i->next()) { $i = $outline_for_i->index; ?>
		<?php if ($i == $current_page) { ?>		
			<strong>[<?php echo $i; ?>]</strong>			
		<?php } else { ?>			
			<a href="<?php echo $page->url($i); ?>"> <?php echo $i; ?> </a>			
		<?php } ?>
	<?php } ?>

	<?php if ($next_page !== FALSE) { ?>	
		<a href="<?php echo $page->url($next_page); ?>"><?php echo __('Next'); ?> &raquo;</a>		
	<?php } else { ?>	
		<?php echo __('Next'); ?> &raquo;		
	<?php } ?>
	
	<?php if ($last_page !== FALSE) { ?>	
		<a href="<?php echo $page->url($last_page); ?>"><?php echo __('Last'); ?> &raquo;</a>		
	<?php } else { ?>
		<?php echo __('Last'); ?> &raquo;		
	<?php } ?>

</p><!-- /.pagination --><?php $_ = OutlineRuntime::finish(__FILE__); ?>