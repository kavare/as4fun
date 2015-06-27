<?php
/*
  Author: kavare (revised from Ole Fredrik Lie)
  URL: http://kavare.github.io/portfolio
*/

// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

// Restrict admin access
require_once('library/admin-access.php');

// Modfiy backend admin menu
require_once('library/admin-menu.php');

// Modfiy backend admin menu color theme
require_once('library/admin-theme.php');

// Modify wp-login style
require_once('library/admin-login.php');

// Add Foundation Event Handler
require_once('library/foundation-events.php');

// Modify Excerpt Patterns
require_once('library/custom-excerpt.php');

// Add Custom Recently Post for Single Post
require_once('library/recently-post.php');

// Helper functions for AfterSchool theme
require_once('library/helper.php');

// Set hidden rule for search results
require_once('library/search-filter.php');

// Shortcodes register block for content components
require_once('library/shortcodes.php');

// Setup opengraph info for social platforms api
require_once('library/opengraph.php');

// Customized ninja-form default setting
require_once('library/ninja-form.php');

// Add Connection post type
require_once('library/post-connection/post-type.php');
require_once('library/post-connection/taxonomy.php');
require_once('library/post-connection/metabox.php');
require_once('library/post-connection/admin-column.php');

// Add Donation post type
require_once('library/post-donation/post-type.php');
require_once('library/post-donation/taxonomy.php');
require_once('library/post-donation/metabox.php');
require_once('library/post-donation/admin-column.php');

// Add Meeting post type
require_once('library/post-meeting/post-type.php');
require_once('library/post-meeting/taxonomy.php');
require_once('library/post-meeting/metabox.php');
require_once('library/post-meeting/admin-column.php');

// Add Volunteer post type
require_once('library/post-volunteer/post-type.php');
require_once('library/post-volunteer/taxonomy.php');
require_once('library/post-volunteer/metabox.php');
require_once('library/post-volunteer/admin-column.php');

// Add Counsel post type
require_once('library/post-counsel/post-type.php');
require_once('library/post-counsel/taxonomy.php');
require_once('library/post-counsel/metabox.php');
require_once('library/post-counsel/admin-column.php');

// Add Gallery post type
require_once('library/post-gallery/post-type.php');
require_once('library/post-gallery/taxonomy.php');
require_once('library/post-gallery/metabox.php');
require_once('library/post-gallery/admin-column.php');
