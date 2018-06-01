
<footer class="page-footer">
  <div class="container">
		<div class="row">
      <div id="footer-sidebar" class="secondary">
        <div id="footer-sidebar1">
          <?php
          if(is_active_sidebar('footer-sidebar-1')){
          dynamic_sidebar('footer-sidebar-1');
          }
          ?>
          </div>
          <div id="footer-sidebar2">
          <?php
          if(is_active_sidebar('footer-sidebar-2')){
          dynamic_sidebar('footer-sidebar-2');
          }
          ?>
          </div>
          <div id="footer-sidebar3">
          <?php
          if(is_active_sidebar('footer-sidebar-3')){
          dynamic_sidebar('footer-sidebar-3');
          }
          ?>
          </div>
          <div id="footer-sidebar4">
          <?php
          if(is_active_sidebar('footer-sidebar-4')){
          dynamic_sidebar('footer-sidebar-4');
          }
          ?>
          </div>
          <div id="footer-sidebar5">
          <?php
          if(is_active_sidebar('footer-sidebar-5')){
          dynamic_sidebar('footer-sidebar-5');
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col s12 m6">2018 © <a href="http://powercoders.org">POWERCODERS</a>
				</div>
				<div class="col s12 m6 social">
					<a href="https://twitter.com/PowerCodersHQ" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="https://www.linkedin.com/company/powercoders-coding-academy/" target="_blank"><i class="fab fa-linkedin  fa-2x"></i></a>
          <a href="https://www.facebook.com/PowerCodersHQ/" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
