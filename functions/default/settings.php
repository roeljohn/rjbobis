<?php
add_filter('admin_init', 'my_general_settings_register_fields');
 
function my_general_settings_register_fields()
{
  register_setting('general', 'rj_description', 'esc_attr');
  add_settings_field('rj_description', '<label for="rj_description">'.__('My Description' , 'rj_description' ).'</label>' , 'my_general_settings_fields_html', 'general');

  /** Copyright */
  register_setting('general', 'rj_copyright', 'esc_attr');
  add_settings_field('rj_copyright', '<label for="rj_copyright">'.__('Copyright' , 'rj_copyright' ).'</label>' , 'copyright_settings_register_fields', 'general');
}
 
function my_general_settings_fields_html()
{
  $value = get_option( 'rj_description', '' );
  echo '<textarea type="text" id="rj_description" rows="4" cols="50" name="rj_description"> '.$value.' </textarea>';
}

/** Copyright */
function copyright_settings_register_fields()
{
  $value = get_option( 'rj_copyright', '' );
  echo '<input type="text" id="rj_copyright" name="rj_copyright" value="' . $value . '" />';
}