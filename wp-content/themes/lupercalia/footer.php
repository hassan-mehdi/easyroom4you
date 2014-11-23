			</div> <!-- #main -->
			
			<?php // lupercalia_footer_section_callback(); ?>

			<div class="footer-bg">
				
				<?php lupercalia_prefooter_section(); ?>

				<footer id="footer" class="footer" role="contentinfo">
				
					<p><?php echo bloginfo('name'); ?> &copy; <?php echo date('Y') ?>. <?php esc_attr_e('All rights reserved', 'lupercalia') ?>.</p>
					
					<p><?php esc_attr_e('Powered by', 'lupercalia') ?> <a href="http://wordpress.org/">WordPress</a> &amp; <a href="http://wordpress.org/themes/lupercalia">Lupercalia Theme</a>.</p>
				
				</footer> <!-- #footer -->

			</div>	<!-- .footer-wrap -->

		</div> <!-- #page -->
	
	<?php wp_footer(); ?> 
	</body>
	
</html>