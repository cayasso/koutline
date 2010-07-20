<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?><?php extract($errors, EXTR_PREFIX_ALL, 'err')?>

<div id="auth">

<div class="wrap">
<div class="auth-content">

<form id="login-form" method="post" action="<?php echo $current_url; ?>">

	<input type="hidden" value="<?php echo $token; ?>" name="token"/>    
    
    <fieldset>
		<h2>Log In</h2><br />     
		<div>
        <label for="username" ><?php echo __('Username'); ?></label>                
        <input <?php if ($err_username) { ?>class="error"<?php } ?> type="text" id="username" name="username" value="<?php echo $data->username; ?>" />
        <em><?php echo $err_username; ?></em>        
        </div>
		
		<div>
        <label for="password" ><?php echo __('Password'); ?></label>               
        <input <?php if ($err_password) { ?>class="error"<?php } ?> type="password" id="password" name="password" value="" />       
        <em><?php echo $err_password; ?></em>  
        </div>	
		
   	</fieldset>

   	<div class="btn-send">
    <input type="image" id="submit" name="submit" class="btn-login" src="<?php echo $media_url; ?>imgs/btn_login.png" value="<?php echo __('send'); ?>"/>
    </div>
    
    <p><a href="<?php echo $base_url; ?>auth/recover-pwd"><?php echo __('Forgot your password?'); ?></a></p>

</form>

<div class="aside">
<h2><?php echo __('New User'); ?></h2>
<p><?php echo __('If you are not a user yet, please click the link bellow to register.'); ?></p>
<a title="<?php echo __('Go to registration page'); ?>" class="btn-register" href="<?php echo $site_url; echo __('subscribe'); ?>"><?php echo __('Contact Us'); ?></a>
</div><!-- /.aside -->

</div><!-- /.auth-content -->
</div><!-- /.wrap -->
<br />
<a href="<?php echo Session::instance()->get('current_url'); ?>" title="<?php echo __('Get back to the site'); ?>"><?php echo __('Get back to the site'); ?></a>
</div><!-- /#auth --><?php $_ = OutlineRuntime::finish(__FILE__); ?>