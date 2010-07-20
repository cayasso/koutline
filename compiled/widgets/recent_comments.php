<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><div id="recent-comments" class="tabs-content">
		
    <ul>    
	<?php foreach ($comments as $comment) { ?>          
        <li>
        <?php echo $comment->author; ?> | <?php echo date("d, F, Y", $comment->created); ?> 
		<br /><a href="<?php echo $site_url; echo $comment->post->uri; ?>#comment_<?php echo $comment->id; ?>" title="<?php echo __('link to'); ?>: "><?php echo Text::limit_words(text::strip_html_tags($comment->message, $html_tags), 15, ' [...]'); ?></a>
        </li>
	<?php } ?>
    </ul>
	
</div><!-- /#recent-comments--><?php $_ = OutlineRuntime::finish(__FILE__); ?>