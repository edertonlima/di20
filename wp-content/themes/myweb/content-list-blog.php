<article class="post-list col-4">
	<?php 

		$args = array(
		    'hide_empty' => 1
		    //'exclude'    =>array(1) //(1,2,3)
		); 
		$categories = get_categories($args); //var_dump($categories);

		$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); 
		if($imagem[0]){ ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="imagem_principal">
				<span class="img-list" style="background-image: url('<?php echo $imagem[0]; ?>');">
					<span></span>
				</span>
				<i class="fa fa-search" aria-hidden="true"></i>
			</a>
		<?php }
	?>

	<div class="box-content no-padding">
		<div class="container">
			<img src="<?php the_field('ico_listagem_post',$categories[0]->taxonomy.'_'.$categories[0]->term_id); ?>" class="ico_list" alt="<?php echo $categories[0]->name; ?>"/>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h5><?php the_title(); ?></h5></a>
			<span class="date"><?php echo get_the_date(); ?></span>
			<?php the_excerpt(); ?>
		</div>
	</div>
</article>