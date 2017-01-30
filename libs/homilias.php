
<?php 

$page_actually = 930;
$perpage_actually = 1;
$day = $perpage_actually-1;

$the_query = new WP_Query(create_page($page_actually,$perpage_actually)); 

?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	  	<?php // obtener_homilia('Homilias','homilia',$page_actually);  ?>
<div class="actual col-xs-12 col-md-4">
    <?php 

    $id = get_permalink($page_actually);
    $title = get_the_title($page_actually);
    echo $pageid;
    ?>   

    <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a> 
    <div class="label">
        <div class="ic-1">
            <i class="icon-file fa fa-file"></i><a href="<?php bloginfo('url'); ?>/homilias/" class="cat"><?php echo $title;  ?></a>
        </div>        
    </div>
    <div class="exe"><?php excerpt('20'); ?>...[<a href="<?php the_permalink(); ?>"> .....</a>]</div>
</div>
<?php endwhile;?>


