<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
					
					<nav>
						<?php oyake_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
			
					<p class="attribution">&copy; <?php bloginfo('name'); ?> <?php _e("is powered by", "oyaketheme"); ?> <a href="http://wordpress.org/" title="WordPress">WordPress</a> <span class="amp">&</span> <a href="https://github.com/Oyake/Oyake-on-Bones" title="oyake" class="footer_oyake_link">Oyake</a>.</p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- scripts are now optimized via Modernizr.load -->	
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>