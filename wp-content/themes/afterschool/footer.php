</section>
<footer class="footer-container">
  <div class="row">
	 <?php do_action('foundationPress_before_footer'); ?>
   <?php dynamic_sidebar("footer-widgets"); ?>
   <article id="footer-contact" class="large-3 columns as-contact-form widget">
      <h6 class="widget-title">聯絡我們</h6>
      <form action="">
        <label for="contact-email">您的email:</label>
        <input type="text" name="contact-email" id="contact-email" required
          placeholder="例：test@example.com">
        <label for="contact-content">您的留言</label>
        <textarea name="contact-content" id="contact-content" required
                  placeholder="您任何寶貴的意見我們都會立刻回應"></textarea>
        <input type="submit" value="送出" class="button">
      </form>
   </article>
	 <?php do_action('foundationPress_after_footer'); ?>
  </div>
  <div class="copyright">
    <div class="row">
      <p class="small-12 medium-6 columns copyright-content">
        2015 放心窩協會 After school for fun &copy; 版權所有<br>
        design by <a href="http://kavare.github.io/portfolio">kavare</a>
        &nbsp;&nbsp;&nbsp;
        本網站所有插圖皆來自<a href="http://www.freepik.com/">Freepik</a>
      </p>
      <div class="small-12 medium-6 columns">
        <!-- <ul class="social-icons">
          <li><i class="fa fa-facebook-square fa-2x fa-fw"></i></li>
          <li></li>
          <li></li>
          <li></li>
        </ul> -->
      </div>
    </div>
  </div>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
