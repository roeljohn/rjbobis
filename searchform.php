<?php
/**
 * The searchform.php template. You can create your own search form in this template
 *
 * Used any time that get_search_form() is called.
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$wp_default_unique_id = wp_unique_id( 'search-form-' );

$wp_default_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<form role="search" <?php echo $wp_default_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="d-flex" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="p-2 w-100">
    	<label class="visually-hidden" for="inlineFormInputGroupUsername">Word</label>
		<input placeholder="type any word" type="search" id="<?php echo esc_attr( $wp_default_unique_id ); ?>" class="form-control" value="<?php echo get_search_query(); ?>" name="s" />
	</div>
	<div class="p-2 flex-shrink-2">
		<input type="submit" class="btn btn-primary" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwentyone' ); ?>" />
	</div>
	
</form>
