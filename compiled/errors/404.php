<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><div class="error-content"><br />
  <img src="<?php echo $media_url; ?>imgs/icons/error_logo.png">
  <h2>Error 404: <?php echo __('The page ":page" does not exist', array(':page' => Request::instance()->uri)); ?></h2>
  <br />
  <p><?php echo __("We're sorry, the page you've requested does not exist or is no longer available. If you feel you've reached this page by mistake, please verify the Web address and try again."); ?></p>
</div>
<!-- /.article -->
<?php $_ = OutlineRuntime::finish(__FILE__); ?>