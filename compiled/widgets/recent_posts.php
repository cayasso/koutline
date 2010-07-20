<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><div id="recent-posts" class="tabs-content">
		
    <ul style="margin-bottom: 15px">    
		<?php foreach ($posts as $post) { ?>
        <li><a href="<?php echo $site_url; echo $page; ?>/<?php echo $post->uri; ?>" title="<?php echo __('link to'); ?>: <?php echo $post->title; ?>"><?php echo $post->title; ?></a></li>    
		<?php } ?> 
    </ul>
	
</div><!-- /#recent-posts --><?php $_ = OutlineRuntime::finish(__FILE__); ?>