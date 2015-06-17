</section>
<footer class="footer-container">
  <div class="row">
	 <?php do_action('foundationPress_before_footer'); ?>
   <?php dynamic_sidebar("footer-widgets"); ?>
	 <?php do_action('foundationPress_after_footer'); ?>
  </div>
  <div class="copyright">
    <div class="row">
      <div class="small-12 large-8 columns copyright-content">
        <span class="content site">2015 放心窩協會 After school for fun &copy; 版權所有</span>
        <span class="content source">本網站所有插圖皆來自<a href="http://www.freepik.com/">Freepik</a></span>
        <div class="designer-block">
          <span class="content designer">Design by <a href="http://kavare.github.io/portfolio">kavare</a></span>
          <span class="content designer">Logo by <a href="#">蔡孟諭</a></span>
        </div>
      </div>
      <div class="small-12 large-4 columns">
        <ul class="social-icons clearfix">
          <li class="hide-for-large-up"><a href="www.line.com" target="_blank">
            <i class="icon-line"></i>
          </a></li>
          <li><a href="www.twitter.com" target="_blank">
            <i class="icon-twitter"></i>
          </a></li>
          <li><a href="www.facebook.com" target="_blank">
            <i class="icon-facebook"></i>
          </a></li>
          <li><a href="<?php echo as_mailto('[建議] 關於放心窩', ''); ?>">
            <i class="icon-email"></i>
          </a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<a class="exit-off-canvas"></a>
<a href="#" class="go-to-top"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
