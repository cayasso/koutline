<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?>

<div class="overlay">
	<a class="prev">Anterior</a>
	<a class="next">Siguiente</a>
	<div class="info"></div>
	<img class="progress" src="<?php echo $media_url; ?>imgs/icons/loading.gif" />
</div>

<div class="aside">

	<div class="widget">
    
        <div id="widget-aside-tabs">
            
            <ul class="tabs">
                <li><a href="#recent-posts" title="Recientes"><?php echo __('Recents'); ?></a></li>
                <li><a href="#recent-comments" title="Commentarios"><?php echo __('Comments'); ?></a></li>
                <li><a href="#archive" title="Archivos"><?php echo __('Archive'); ?></a></li>
            </ul>
            
            <?php echo widget::load('recent_comments'); ?>
        
            <?php echo widget::load('recent_posts'); ?>
            
            <?php echo widget::load('archive'); ?>
                        
        </div><!-- /#widget-aside-tabs -->
        
 	</div><!-- /.widget -->
    
    <div class="widget">
    <?php echo widget::load('tag_cloud'); ?>
    </div><!-- /.widget -->
    
</div><!-- /.aside --><?php $_ = OutlineRuntime::finish(__FILE__); ?>