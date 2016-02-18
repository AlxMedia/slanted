<form method="get" class="searchform themeform" action="<?php echo home_url('/'); ?>">
	<div>
		<input type="text" class="search" name="s" onblur="if(this.value=='')this.value='<?php _e('To search type and hit enter','slanted'); ?>';" onfocus="if(this.value=='<?php _e('To search type and hit enter','slanted'); ?>')this.value='';" value="<?php _e('To search type and hit enter','slanted'); ?>" />
	</div>
</form>