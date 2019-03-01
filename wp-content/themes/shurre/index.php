<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShUrRe
 */

get_header();
?>

	<div class="row">
		<!-- seccion Principal -->
		<div class="col s12 m6 l10">
			<?php if (have_posts() ): while(have_posts()) : the_post();?>
		

				<div class=" col l3 card">
					<div class="card-image waves-effect waves-block waves-light">
						<?php if (has_post_thumbnail()) : ?>
							<!-- <img class="activator" src="<?php //bloginfo('template_url');?>/img/plato1.jpg"> -->
							<a href="#" title="<?php the_title(); ?> ">
								<?php the_post_thumbnail('post-thumbnails',array('class' => 'activator') ) ;?>
							</a> 	
						<?php endif ;?>
					</div>

					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4"><?php the_title(); ?></span>
						<p><?php the_excerpt(); ?></p><br>

		<p><a class="waves-effect waves-light btn"><i class="material-icons left">local_dining</i> <?php the_category('name'); ?></a></p>
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">label_outline</i>Ocasiones</a></p>
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">place</i>Regiones</a></p>

					</div>
					<div class="card-action">
						<p><a href="<?php the_permalink();?>">Ir a la Receta</a></p>

					</div>
				</div>

			<?php endwhile;endif; ?>	<br>
			
	</div>

	<div class="col s12 m6 l2">
		<?php get_sidebar(); ?>
		
	</div>
</div>

<!-- footer -->
<?php get_footer(); ?>
