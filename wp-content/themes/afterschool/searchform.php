<?php do_action('foundationPress_before_searchform'); ?>
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
		<?php do_action('foundationPress_searchform_top'); ?>
			<label class="screen-reader-text" for="s">搜尋內容</label>
			<input type="text" value="" name="s" id="s" placeholder="請輸入搜尋內容">
		<?php do_action('foundationPress_searchform_before_search_button'); ?>
			<input type="submit" id="searchsubmit" value="搜尋" class="prefix button">
		<?php do_action('foundationPress_searchform_after_search_button'); ?>
</form>
<?php do_action('foundationPress_after_searchform'); ?>
