<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				© 2014 版权所有。 「趣课题」项目由少年商学院研发  运营机构：广州西柚教育信息咨询有限公司
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

<!-- JiaThis Button BEGIN -->
<script type="text/javascript" >
    var jiathis_config={
        data_track_clickback:true,
        summary:"",
        shortUrl:false,
        hideMore:false
    }
</script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1993513" charset="utf-8"></script>
<!-- JiaThis Button END -->

</body>
</html>
