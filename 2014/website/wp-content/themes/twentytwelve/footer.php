<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			&copy; Operation Cyberpaint, 2013-2014. Created by <a href="http://jeltelagendijk.nl" title="Jelte Lagendijk" target="_blank">Jelte Lagendijk</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<div id="maximage">
    <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img.jpg" alt="" width="1600" height="1066" />
</div>
<script type="text/javascript">
    $(function(){
        // Trigger maximage
        jQuery('#maximage').maximage();
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
