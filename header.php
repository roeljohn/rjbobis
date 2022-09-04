<?php
/**
 * The header.php contains the head section of a WordPress site, and it is commonly called at the start 
 * of all the template files. It usually contains the header information, analytics, calls to CSS files, 
 * site navigation, page titles, site logo, etc.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body class="bg-light">
<div class="container">
  <main>
    <div class="pt-5 text-center">
      <img class="d-block mx-auto mb-4 rounded-5" src="http://localhost/rjbobis/wp-content/uploads/2022/09/1x1.jpg" alt="" width="72" height="auto">
      <h5><?php echo get_option( 'blogname' ); ?></h5>
      <p >
      <?php echo get_option( 'rj_description' ); ?>
      </p>
    </div>