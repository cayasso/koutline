<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><div class="article">

    #widget::load('quick_links')
        
    <?php if ($post) { ?>

        <div class="header">
            <h2><a href="<?php echo $current_url; ?>" title="<?php echo __('link to'); ?>: <?php echo $post->title; ?>"><?php echo $post->title; ?></a></h2>
            <span class="time"><?php echo __('This publication was created'); ?> <?php echo __(Date::fuzzy_span(strtotime($post->created))); ?></span>
            <?php if ($post->author) { ?><address class="vcard"><?php echo __('Author'); ?>: <?php echo $post->author; ?></address> <?php } ?>
        </div>    
    
        <p><?php echo $post->content; ?></p>
        
        <hr />
        <a class="get-more" title="<?php echo __('Read more publications'); ?>" href="<?php echo $base_url; echo $page; ?>"><?php echo __('Read more publications'); ?></a>
        
		<div id="<?php echo $id; ?>" class="section comments <?php echo $class; ?>">        	
			<h2 class="hcomment"><span class="num"><?php echo $num_comments; ?></span> <?php echo __('Comments for this post'); ?></h2>
		   
           	<?php $counter = 1; ?>
			<?php foreach ($comments as $comment) { ?>
			 <div class="article">
             	<a name="comment_<?php echo $comment->id; ?>"></a>
				<address><?php if ($comment->url) { ?><a href="<?php echo $comment->url; ?>"><?php echo $comment->author; ?></a><?php } else { ?> <?php echo $comment->author; ?> <?php } ?></address><br>
				<span class="time"><?php echo __('This comment was created'); ?> <?php echo __(Date::fuzzy_span(strtotime($comment->created))); ?></span><br><hr>
				<p><?php echo $comment->message; ?></p>
                <span class="comment_bottom_bg"></span>
			 </div><!-- /.article -->
             
             <?php $counter++; ?>
			<?php } ?>
		
		</div><!-- /.comments -->
        
		<?php echo $form; ?>

        <hr class="clear" />
    
    <?php } else { ?>
    
        <?php foreach ($posts as $post) { ?>

        <div class="header">
            <h2><a href="<?php echo $site_url; echo $page; ?>/<?php echo $post->uri; ?>" title="<?php echo __('link to'); ?>: <?php echo $post->title; ?>"><?php echo $post->title; ?></a></h2>
            <span class="time"><?php echo __('This publication was created'); ?> <?php echo __(Date::fuzzy_span(strtotime($post->created))); ?></span>
            <?php if ($post->author) { ?><address class="vcard"><?php echo __('Author'); ?>: <?php echo $post->author; ?></address><?php } ?>
        </div>    
        
        <p>	<?php echo Text::limit_words(text::strip_html_tags($post->content, $html_tags), 50, ' [...]'); ?> <em><br /><a href="<?php echo $site_url; echo $page; ?>/<?php echo $post->uri; ?>" title="<?php echo __('Read more'); ?>"><?php echo __('Read more'); ?></a></em> </p>
        
        <hr />
    
        <?php } ?>
    

        <?php if ($pagination) { ?>
         <?php echo $pagination; ?>
         <hr class="clear" />
        <?php } ?>
        
    <?php } ?>

</div><!-- /.article --><?php $_ = OutlineRuntime::finish(__FILE__); ?>