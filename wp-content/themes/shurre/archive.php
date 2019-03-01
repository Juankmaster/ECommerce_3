<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShUrRe
 */

get_header();
?>
    <div class="titulo-sitio">
    	
    	<?php if (is_category ('platos')):?>
			<h2 style="background:#2586EC"> Post de <?php echo the_category();?></h2>
			<?php elseif (is_category ('regiones')):?>
			<h2 style="background:#4CAA51"> Post de <?php echo the_category();?></h2>
			<?php else:?>
			<p><h3 style="background:##D5A44F"> Post de Categoria/SubCategoria: <?php echo the_category();?></h3>
			<?php endif; ?>
    </div>
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

						<p><a class="waves-effect waves-light btn"><i class="material-icons left">local_dining</i>Platos</a></p>
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

<?php

get_footer();
