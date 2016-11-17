<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================


//GOOGLE MAPS API
//========================================
function my_aweber_analytics(){
?>
	<script type="text/javascript">
		//Your Custom script here
	</script>
<?php
}

add_action( 'wp_head', 'my_aweber_analytics' );

//END OF GOOGLE MAP API
//===============================================================================