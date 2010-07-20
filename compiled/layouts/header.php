<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><div class="header">
  <h1><a href="<?php echo $site_url; ?>" title="<?php echo $logo_title; ?>"><span><?php echo $logo_title; ?></span></a></h1>
  
  <span class="top-links">
    <strong><?php echo __('Welcome'); ?>, <?php if ($user) { echo $user->name; } else { echo __('visiter'); } ?></strong> | <a href="<?php echo $site_url; echo __('who-we-are'); ?>" title="<?php echo __('Who we are'); ?>"><?php echo __('Who we are'); ?></a> | <a href="<?php echo $site_url; echo __('contactus'); ?>" title="<?php echo __('Contact Us'); ?>"><?php echo __('Contact Us'); ?></a>
	<?php if ($logged_in) { ?> | 
    <!-- <a href="#<?php echo $site_url; ?>" title="<?php echo __('My account'); ?>"><?php echo __('My account'); ?></a> | --> 
    <a href="<?php echo $site_url; ?>auth/logout" title="<?php echo __('Logout'); ?>"><?php echo __('Logout'); ?></a>
    <?php } else { ?> | 
    <a href="<?php echo $site_url; ?>auth/login" title="<?php echo __('Login'); ?>"><?php echo __('Login'); ?></a>
    <?php } ?>
  </span>
  
  <ul class="flags">
    <li><a id="fl_mx" href="<?php echo $site_url; ?>#" title="México">México</a></li>
    <li><a id="fl_gt" href="<?php echo $site_url; ?>#" title="Guatemala">Guatemala</a></li>
    <li><a id="fl_hd" href="<?php echo $site_url; ?>#" title="Honduras">Honduras</a></li>
    <li><a id="fl_sv" href="<?php echo $site_url; ?>#" title="El Salvador">El Salvador</a></li>
    <li><a id="fl_ni" href="<?php echo $site_url; ?>#" title="Nicaragua">Nicaragua</a></li>
    <li><a id="fl_cr" href="<?php echo $site_url; ?>#" title="Costa Rica">Costa Rica</a></li>
    <li><a id="fl_pa" href="<?php echo $site_url; ?>#" title="Panamá">Panamá</a></li>
    <li><a id="fl_rd" href="<?php echo $site_url; ?>#" title="República Dominicana"></a></li>
  </ul>
</div><!-- /.header -->

<?php $_ = OutlineRuntime::finish(__FILE__); ?>