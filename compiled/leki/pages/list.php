<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><div class="box">
<h2>Pages</h2>

<a class="create" href="<?php echo $base_url; ?>cms/pages/create"><?php echo __('NEW PAGE'); ?></a>

<table cellspacing="0" class="list-table" id="page-list">
					
	<thead>
		<tr>
			<th width="3%"><input type="checkbox" /></th>
			<th width="90%"><a href="#" title="<?php echo __('Title'); ?>"><?php echo __('Title'); ?></a></th>
			<th><a href="#" title="<?php echo __('Modified'); ?>"><?php echo __('Modified'); ?></a></th>
			<th><a href="#" title="<?php echo __('Status'); ?>"><?php echo __('Published'); ?></a></th>			
		</tr>
	</thead><!-- /thead -->
		
	<tbody>	
	<?php foreach ($pages as $page) { ?>
		<tr>
			<td><input type="checkbox"></input></td>
			<td class="preview-trigger"><a class="little-preview" href="#" title="<?php echo $page->title; ?>"><?php echo $page->title; ?></a>
				<div class="actions close">
					<a href="<?php echo $base_url; ?>cms/pages/edit/<?php echo $page->id; ?>" title="<?php echo __('Edit this page'); ?>"><?php echo __('Edit'); ?></a>					
					<a href="<?php echo $base_url; ?>cms/pages/delete/<?php echo $page->id; ?>" title="<?php echo __('Delete this page'); ?>"><?php echo __('Delete'); ?></a>
				</div>
			</td>
			<td class="center"><time datetime="<?php echo $modified = date('d/m/y', $page->modified); ?>"><?php echo $modified; ?></time></td>
			<td class="center"><?php if ($page->status == 1) { echo __('Yes'); } else { echo __('No'); } ?></td>									
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
<a href=""><?php echo __('PUBLISH SELECTED'); ?></a><a href=""><?php echo __('DELETE SELECTED'); ?></a>

</div><?php $_ = OutlineRuntime::finish(__FILE__); ?>