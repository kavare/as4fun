<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
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

// Modfiy backend admin menu
require_once('library/admin-menu.php');

// Add Foundation Event Handler
require_once('library/foundation-events.php');

// Modify Excerpt Patterns
require_once('library/custom-excerpt.php');

// Helper functions for AfterSchool theme
require_once('library/helper.php');

// Add Connection post type
require_once('library/post-connection/post-type.php');
require_once('library/post-connection/taxonomy.php');
require_once('library/post-connection/metabox.php');
require_once('library/post-connection/admin-column.php');

// Add Activity post type
require_once('library/post-activity/post-type.php');
require_once('library/post-activity/taxonomy.php');
require_once('library/post-activity/metabox.php');
require_once('library/post-activity/admin-column.php');

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

?>
