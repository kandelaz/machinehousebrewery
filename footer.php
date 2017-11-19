
		<footer>
			<div class="centered">
				<div class="footer-items">


					<div class="footer-item tweets">
					<p>Latest Tweets</p>
					<a class="twitter-timeline" href="https://twitter.com/MachineHouse" data-widget-id="297807239471833088" data-chrome="noheader nofooter noscrollbar noborders transparent"  data-tweet-limit="1">Loading Tweets...</a>
					</div>

					<div class="footer-item map">
						<a href="http://goo.gl/hvzB4O" target="_blank">
						<p>Location</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2692.9271549672267!2d-122.31842952778622!3d47.54974648171512!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbcae5e2dff987b0f!2sMachine+House+Brewery!5e0!3m2!1sen!2sus!4v1447447001971" width="290" height="155" frameborder="0" style="border:0" class="location">
						</iframe>
						</a>
					</div>

					<div class="footer-item building-logo">
						<img src="<?php bloginfo('template_directory'); ?>/images/machine-house-brewery-smoke-stack-logo.png" alt="Machine-House-Smoke-Stack-Logo-Georgetown">
					</div>


				</div>
			</div>
			<hr>
			<nav class="footer-nav centered">
				<?php
					wp_nav_menu(array(
					'theme_location' => 'footer-menu',
					'container' => ''
					));
				?>
			</nav>
			<hr class="hr-2">

			<div class="copyright">
				<p>&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br>5840 Airport Way S. Suite 121, Seattle, WA 98108</p>
			</div>
		</footer>

		<!-- start wp footer -->
		<?php wp_footer(); ?>

	</body>
</html>
