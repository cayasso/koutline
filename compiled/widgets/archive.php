<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><div id="archive" class="tabs-content">
		
    <ul>    
		<?php foreach ($dates as $years) { ?>
        <li><a href="<?php echo $site_url; echo $page; ?>/$post->uri" title="<?php echo __('link to'); ?>: $post->title"><?php echo $years['year']; ?></a></li>    
		<?php } ?>
    </ul>
	
</div><!-- /#archive --><?php $_ = OutlineRuntime::finish(__FILE__); ?>