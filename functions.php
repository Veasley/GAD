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





// Add custom header
// =============================================================================

function add_custom_header(){ ?>
  
  <?php if ( is_archive() || is_home() || is_front_page() ) : ?>
  <div class="custom-header-container">
      
      <!-- our custom header codes here -->
      <!-- <img src="/wp-content/uploads/2016/12/gad-blog.jpg" alt="woman taking photo of a plant with he cell phone"> -->
      
      <div id="x-section-1" class="x-section _before _overlay-grey inner-page-hero bg-image blog-header" style="margin: 0px;padding: 5% 0px; background-image: url(/wp-content/uploads/2016/12/gad-blog.jpg); background-color: transparent;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
          <div class="x-container max width" style="margin: 0px auto;padding: 0px;">
              <div class="x-column x-sm x-1-1" style="padding: 0px; opacity: 1; transition-duration: 750ms; transform: translate(0px, 0px);" data-x-element="column" data-x-params="{&quot;fade&quot;:true}" data-fade="true">
                  <h1 class="x-text-type h3" data-x-element="text_type" data-x-params="{&quot;strings&quot;:[&quot;Blog&quot;],&quot;type_speed&quot;:50,&quot;start_delay&quot;:0,&quot;back_speed&quot;:50,&quot;back_delay&quot;:3000,&quot;loop&quot;:false,&quot;show_cursor&quot;:true,&quot;cursor&quot;:&quot;|&quot;}">
                      <span class="text">Blog</span><!--<span class="typed-cursor">|</span>-->
                  </h1>
              </div>
          </div>
      </div>
      
  </div>
  <?php endif; ?>
  
<?php }
add_action('x_before_view_ethos__landmark-header', 'add_custom_header');