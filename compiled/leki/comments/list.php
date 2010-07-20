<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><div class="box">
<h2>COMMENTS</h2>

<?php echo Form::open(); ?>
<table cellspacing="0" class="list-table" id="post-list">
					
	<thead>
		<tr>
			<th width="3%"><input class="check-all" type="checkbox" /></th>			
			<th><a href="#" title="Post"><?php echo __('Comment'); ?></a></th>
			<th><a href="#" title="Post"><?php echo __('Author'); ?></a></th>			
			<th><a href="#" title="Post"><?php echo __('email'); ?></a></th>
			<th><a href="#" title="Modified"><?php echo __('Created'); ?></a></th>			
			<th><a href="#" title="Status"><?php echo __('Active'); ?></a></th>			
		</tr>
	</thead><!-- /thead -->
		
	<tbody>	
	<?php foreach ($comments as $comment) { ?>
		<tr>
			<td><input type="checkbox" name="comments[status][<?php echo $comment->id; ?>]" /></td>
			<td class="preview-trigger" style="width: 100%"><a class="little-preview" href=""><?php echo Text::limit_words(text::strip_html_tags($comment->message, $html_tags), 150, ' [...]'); ?></a>
				<div class="actions close">
					<a href="<?php echo $base_url; ?>cms/comments/edit/<?php echo $comment->id; ?>" title="<?php echo __('Edit this post'); ?>"><?php echo __('Edit'); ?></a>
					<a href="<?php echo $base_url; echo $comment->post->page->uri; ?>/<?php echo $comment->post->uri; ?>/commen_<?php echo $comment->id; ?>" title="<?php echo __('View this post'); ?>"><?php echo __('View'); ?></a>
					<a href="<?php echo $base_url; ?>cms/comments/delete/<?php echo $comment->id; ?>" title="<?php echo __('Delete this item'); ?>"><?php echo __('Delete'); ?></a>
				</div>
				
				<div class="preview-content box preview-close"><?php echo $comment->message; ?></div>
			</td>
			<td class="center"><?php if ($comment->url) { ?><a href="<?php echo $comment->url; ?>" title="<?php echo __('Visit: '); echo $comment->url; ?>"><?php echo $comment->author; ?></a><?php } else { echo $comment->author; } ?></td>			
			<td class="center"><?php echo HTML::mailto($comment->email, $comment->email); ?></td>
			<td class="center"><?php echo date('d/m/y', $comment->created); ?></td>
			<td class="center"><?php if ($comment->status == 1) { echo __('Yes'); } else { echo __('No'); } ?></td>									
		</tr>
	<?php } ?>
	</tbody><!-- /tbody -->
	
	<tfoot>
		<tr>
			<td class="pagination" colspan="6">
				<?php echo $pagination; ?>					
			</td>
		</tr>
	</tfoot><!-- /tfoot -->
	
</table>	

<p><?php echo Form::submit('publish', 'Publish'); ?> <?php echo Form::submit('unpublish', 'Un-Publish'); ?> <?php echo Form::submit('delete', 'Delete'); ?></p>

<?php echo Form::close(); ?>
</div>			<?php $_ = OutlineRuntime::finish(__FILE__); ?>