<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package unreal-themes
 */

get_header();
?>

	<div id="rec477833266" class="r t-rec t-rec_pt_30 t-rec_pb_60 r_showed r_anim" style="padding-top:30px;padding-bottom:60px; " data-record-type="106">
		<!-- T004 -->
		<div class="t004">
			<div class="t-container ">
				<div class="t-col t-col_10 t-prefix_1">
					<div field="text" class="t-text t-text_md">
						<?php
						while ( have_posts() ) :
							the_post();

							the_content();

						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();