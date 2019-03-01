<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShUrRe
 */

?>

<!--  --> <div class="row">
		<!-- seccion Principal -->
		<div class="col s12 m6 l10">
			
		

				<div class=" col l3 card">
					<div class="card-image waves-effect waves-block waves-light">
						<?php if (has_post_thumbnail()) : ?>
							<!-- <img class="activator" src="<?php //bloginfo('template_url');?>/img/plato1.jpg"> -->
							<a href="<?php the_permalink();?>" title="<?php the_title(); ?> ">
								<?php the_post_thumbnail('post-thumbnails',array('class' => 'activator') ) ;?>
							</a> 	
						<?php endif ;?>
					</div>

					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4"><?php the_title(); ?></span>
						<p><?php the_excerpt(); ?></p><br>

						<p><a class="waves-effect waves-light btn"><i class="material-icons left">local_dining</i>Platos</a></p>
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">label_outline</i>Ocasiones</a></p>
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">place</i>Regiones</a></p>

					</div>
					<div class="card-action">
						<p><a href="#">This is a link</a></p>

					</div>
				</div>

			
	</div>

	<div class="col s12 m6 l2">
		<?php get_sidebar(); ?>
	</div>
</div>