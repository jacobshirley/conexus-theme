<?php
/**
 * default search form
 */
?>
<form class="ui form fluid" role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="ui input focus fluid">
		<input id="search-input" name="s" type="search" placeholder="<?php _e( 'Search...', 'presentation' ); ?>">
	</div>
</form>