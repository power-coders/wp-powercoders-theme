<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col s12 m4 l2">
        <?php
        if(is_active_sidebar('content-footer')){
        dynamic_sidebar('content-footer');
        }
        ?>
			</div>
			<div class="col s12 m4 l2">
        <?php
        if(is_active_sidebar('get-involved-footer')){
        dynamic_sidebar('get-involved-footer');
        }
        ?>
			</div>
			<div class="col s12 m4 l2">
        <?php
          if(is_active_sidebar('powercoders-footer')){
          dynamic_sidebar('powercoders-footer');
          }
        ?>
			</div>
			<div class="col s12 m6 l3">
        <?php
          if(is_active_sidebar('mailinglist-footer')){
          dynamic_sidebar('mailinglist-footer');
          }
        ?>
			</div>
			<div class="col s12 m6 l3">
        <?php
        if(is_active_sidebar('donate-footer')){
        dynamic_sidebar('donate-footer');
        }
        ?>
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
