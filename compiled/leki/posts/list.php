<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><h2><?php echo _('Post list'); ?></h2>

<div class="box">

	
	<?php echo Form::open(); ?>
	<table class="list-table" id="post-list">
		
		<thead>
			<tr>
				<th style="width: 5%"><input type="checkbox" /></th>
				<th style="width: 90%"><?php echo __('Title'); ?></th>
				<th>Comments</th>
				<th><?php echo __('Created'); ?></th>			
				<th><?php echo __('Published'); ?></th>
			</tr>
		</thead><!-- /thead -->
		
		<tbody>	
		<?php foreach ($posts as $post) { ?>
			<tr>
				<td><input type="checkbox" name="posts[status][<?php echo $post->id; ?>]" /></td>						
				<td class="preview-trigger" style="width: 100%"><a class="little-preview" href=""><?php echo $post->title; ?></a>
					<div class="actions close">
						<a href="<?php echo $base_url; ?>cms/posts/edit/<?php echo $post->id; ?>" title="<?php echo __('Edit this post'); ?>"><?php echo __('Edit'); ?></a>
						<a href="<?php echo $base_url; echo $post->page->uri; ?>/<?php echo $post->uri; ?>" title="<?php echo __('View this post'); ?>"><?php echo __('View'); ?></a>
						<a href="<?php echo $base_url; ?>cms/posts/delete/<?php echo $post->id; ?>" title="<?php echo __('Delete this item'); ?>"><?php echo __('Delete'); ?></a>
					</div>
					
					<article class="preview-content box preview-close"><?php echo $post->content; ?></article>
				</td>			
				<td class="center"><?php $comments = $post->comments->count(); ?> <?php if ($comments > 0) { ?> <a class="comments-count" href="<?php echo $base_url; ?>cms/comments/list/<?php echo $post->id; ?>"><?php echo $comments; ?></a><?php } ?></td>
				<td class="center"><time datetime="<?php echo $modified = date('d-m-y', $post->modified); ?>"><?php echo $modified; ?></time></td>
				<td class="center"><?php if ($post->status == 1) { echo __('Yes'); } else { echo __('No'); } ?></td>				
			</tr>
		<?php } ?>		
		</tbody><!-- /tbody -->
		
		<tfoot>
			<tr>
				<td class="pagination" colspan="5">
					<?php echo $pagination; ?>					
				</td>
			</tr>
		</tfoot><!-- /tfoot -->
		
	</table>		
	<p><?php echo Form::submit('publish', 'Publish'); ?> <?php echo Form::submit('unpublish', 'Un-Publish'); ?> <?php echo Form::submit('delete', 'Delete'); ?></p>
	
	<?php echo Form::close(); ?>

</div><!-- /.box -->
<?php $_ = OutlineRuntime::finish(__FILE__); ?>