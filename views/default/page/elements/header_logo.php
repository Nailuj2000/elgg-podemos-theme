<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<img src="<?php echo elgg_get_site_url(); ?>mod/bright-theme/graphics/logo.png">
	</a>
</h1>

<div id="eltoggle">
  Menu
</div>

<script>
jQuery( "#eltoggle" ).click(function() {
  jQuery( "div.menumoviles" ).toggle( "fast", function() {
    // Animation complete.
  });
});
</script>