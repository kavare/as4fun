<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<div class="row error-page-container">
  <div class="small-12 columns">
    <h1 class="error-pagetitle">對不起，但我們什麼也沒找到</h1>
  </div>
	  <div class="small-10 small-push-1 large-push-0 columns end error-main" role="main">
	    <p class="error-content">這裡什麼也沒有...試試別的地方吧！</p>
	    <div class="error-section">
	      <p class="error-content">你可以試著再找找看...</p>
	      <form role="search" method="get" id="searchform" class="searchform searchbar clearfix" action="<?php echo home_url('/'); ?>">
	        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="search-input" placeholder="請輸入搜尋內容">
	        <input type="submit" id="searchsubmit" value="搜尋" class="button search-btn">
	      </form>
	    </div>

	    <div class="error-section button-group">
	      <p class="error-content">你也可以...</p>
	      <a href="javascript:history.back()" class="button btn-back">回上一頁</a>
	      <a href="<?php echo home_url(); ?>" class="button btn-home">回到首頁</a>
	    </div>
	  </div>
</div>