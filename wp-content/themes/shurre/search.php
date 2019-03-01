<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ShUrRe
 */

get_header();
?>

	<div class="titulo-sitio">
    	
    	<?php if (is_category ('platos')):?>
			<h2 style="background:#2586EC">Categoria<?php echo the_category('name');?></h2>
			<?php elseif (is_category ('regiones')):?>
			<h2 style="background:#4CAA51">Categoria <?php echo the_category('name');?></h2>
			<?php else:?>
			<p><h2 style="background:##D5A44F">Categoria <?php echo the_category('name');?></h2>
			<?php endif; ?>
    </div>

	<div class="row">
		<!-- seccion Principal -->
		<div class="col s12 m6 l10">
			<?php if (have_posts() ): while(have_posts()) : the_post();?>
		

				<div class=" col l6  offset-l3 card">
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

					<a class="waves-effect waves-light btn"><i class="material-icons left">local_dining</i>Platos</a>
					<a class="waves-effect waves-light btn"><i class="material-icons left">label_outline</i>Ocasiones</a>
					<a class="waves-effect waves-light btn"><i class="material-icons left">place</i>Regiones</a>

					</div>
					<div class="card-action">
						
						<div class="card col l6">
							<h4 class="light-blue">Descripcion</h4>
							<?php the_content();  ?>
						</div>
						
						<div class="card col l6  ">
							<h4 class="pink" >Ingredientes</h4>
							hola
						</div>
						<div class="card col l12  ">
							<h4 class="deep-purple lighten-1" >preparacion</h4>
						<?php the_content();  ?>
						</div>

					</div>
				</div>

			<?php endwhile;endif; ?>	<br>
			
	</div>

	<div class="col s12 m6 l2">
		<?php get_sidebar(); ?>
		
	</div>
</div>
<?php get_footer();
 ?>