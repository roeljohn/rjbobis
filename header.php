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
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body class="bg-light">
  <div class="container">
    <main>
      <div class="pt-5">
        <a href="<?php echo home_url(); ?>">
          <img class="d-block mx-auto mb-4 rounded-5 rj-shadow" src="<?php echo home_url(); ?>/wp-content/uploads/2022/09/1x1.jpg" alt="" width="72" height="auto">
        </a>
        <h5><?php echo get_option( 'blogname' ); ?></h5>
        <p >
        <?php echo get_option( 'rj_description' ); ?>
        </p>
      </div>