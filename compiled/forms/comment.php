<?php $_ = OutlineRuntime::start(__FILE__, isset($this) ? $this : null); $_->init_runtime('system'); ?>﻿<?php extract($errors, EXTR_PREFIX_ALL, 'err')?>

<form id="comment_form" method="post" action="<?php echo $current_url; ?>">

    <input type="hidden" value="<?php echo $token; ?>" name="token"/>  
    
    <fieldset>
    
        <legend><?php echo __('Send a comment'); ?></legend>
        
        <div>
        $data->label('author')<em>*</em>               
        <input class="<?php if ($err_author) { ?>error<?php } ?>" type="text" id="author" name="author" value="<?php echo $data->author; ?>" />        
		<?php if ($err_author) { ?><em><?php echo $err_author; ?></em><br /><?php } ?>
        </div>
        
         <div>
        $data->label('email')<em>*</em>               
        <input class="<?php if ($err_email) { ?>error<?php } ?>" type="text" id="email" name="email" value="<?php echo $data->email; ?>" />
		<?php if ($err_email) { ?><em><?php echo $err_email; ?></em><br /><?php } ?>
        </div>
        
        <div>
        $data->label('url')    
        <input class="<?php if ($err_url) { ?>error<?php } ?>" type="text" id="url" name="url" value="<?php echo $data->url; ?>" />  
		<?php if ($err_url) { ?><em><?php echo $err_url; ?></em><br /><?php } ?>     
        </div>
                           
        <div>
        $data->label('message')<em>*</em>       
        <textarea class="<?php if ($err_message) { ?>error<?php } ?>" id="message" name="message" ><?php echo $data->message; ?></textarea>
		<?php if ($err_message) { ?><em><?php echo $err_message; ?></em><br /><?php } ?>     
        </div>
        
        <?php echo $captcha; ?>
        
        <div class="btn-send">
        <input type="image" id="submit" name="submit" class="btn-send" src="<?php echo $media_url; ?>imgs/btn_enviar_comentario.png" value="<?php echo __('Send'); ?>"/>
        </div><br />  
   
   </fieldset>
     
</form><?php $_ = OutlineRuntime::finish(__FILE__); ?>