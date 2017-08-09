<article class="post-list">
	<?php $categories = get_the_category(); print_r($categories);
		$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); 
		if($imagem[0]){ ?>
			<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>" class="imagem_principal" />
		<?php }
	?>

	<div class="box-content sombra no-pading">
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_cofound-page.png" class="ico_cafe" alt=""/>
			<h5><?php the_title(); ?></h5>
			<span class="date"><?php the_date(); ?></span>
			<p class="sub-tituto text-content-medium"><?php the_excerpt(); ?></p>
		</div>
	</div>
</article>