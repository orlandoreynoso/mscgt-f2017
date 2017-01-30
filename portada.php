<?php 
/*
Template Name: Portada
Template Post Type: post, page, product
 */
?>
<?php get_header(); ?>

<div class="slide">
    <div class="row">
      <div class="col-md-12">
        <?php include (TEMPLATEPATH . '/libs/banner.php');   ?> 
      </div>
    </div>
</div>

<section class="info-parroquial">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<article>
				<?php include (TEMPLATEPATH . '/libs/infoparroquial.php');  ?>
			</article>					
		</div>
	</div>
</div>	
</section>

<section class="espiritualidad">
	<div class="container">
		<div class="row cuadro-reflexiones">
			<div class="titulo"><h3>Espiritualidad</h3></div>
			<div class="col-md-12 reflexiones">
					<?php include TEMPLATEPATH.'/libs/homilias.php'; ?>
					<?php //include TEMPLATEPATH.'/libs/reflexiones.php'; ?>
					<?php include TEMPLATEPATH.'/libs/mes1.php'; ?>
					<?php include TEMPLATEPATH.'/libs/mes2.php'; ?>										
			</div>
		</div>
	</div>
</section>


<section class="crecimiento">
	<div class="container">
		<div class="row cuadro-crecimiento">
			<div class="titulo"><h3>Crecimiento</h3></div>
			<div class="contenido">
				<div class="actual col-xs-12 col-md-6">
					<?php $the_query = new WP_Query(create_page(1326,1));  	?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<?php 
					    $id = get_permalink(1326);
					    $title = get_the_title(1326);
				     ?>

					<a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	
		    		<a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a> 
					<div class="label">
						<div class="ic-2">
							<i class="icon-file2 fa fa-link"></i>				
							<a href="<?php bloginfo('url'); ?>/<?php echo $title; ?>" class="cat"><?php echo $title;  ?></a>
						</div>
					</div>
					<div class="exe"><?php the_excerpt(); ?></div>
					<?php endwhile;?>
				</div>
				<div class="actual col-xs-12 col-md-6">
					<?php $the_query = new WP_Query(create_page(1300,1));  	?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

					<?php 
					    $id = get_permalink(1300);
					    $title = get_the_title(1300);
				     ?>

					<a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	
		    		<a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a> 
					<div class="label">
						<div class="ic-2">
							<i class="icon-file2 fa fa-link"></i>				
							<a href="<?php bloginfo('url'); ?>/<?php echo $title; ?>" class="cat"><?php echo $title;  ?></a>
						</div>
					</div>
					<div class="exe"><?php the_excerpt(); ?></div>
					<?php endwhile;?>				
				</div>
			</div>
		</div>
	</div>
</section>

<section class="last">
	<div class="container">
		<div class="row cuadro-last">
			<div class="titulo"><h3>últimas noticias</h3></div>
			<div class="contenido">
				<?php get_sidebar('3'); ?>		
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>