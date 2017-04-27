<h1>Madrid Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields( 'madrid-settings-group' ); ?>
	<?php do_settings_sections( 'alecaddd_madrid' ); ?>
	<?php submit_button(); ?>
</form>