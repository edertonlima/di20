<!-- slide -->
<section class="box-content box-slide">
	<div class="slide">
		<div class="carousel slide" data-ride="carousel" data-interval="6000" id="slide">

			<div class="carousel-inner" role="listbox">

				<?php if( have_rows('slide') ):
					$slide = 0;
					while ( have_rows('slide') ) : the_row();

						if(get_sub_field('imagem')){
							$slide = $slide+1; ?>

							<div class="item <?php if($slide == 1){ echo 'active'; } ?>" style="background-image: url('<?php the_sub_field('imagem'); ?>');">

								<div class="box-height">
									<div class="box-texto">
										
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_page_sobre.png" class="" alt="Realizamos"/>
										<h2 class="title_page"><?php the_title(); ?></h2>

										<p class="texto"><?php the_sub_field('texto'); ?></p>
										<?php if(get_sub_field('sub_texto')){ ?>
											<p class="sub-texto"><?php the_sub_field('sub_texto'); ?></p>
										<?php } ?>

									</div>
								</div>
								
							</div>

						<?php }

					endwhile;
				endif; ?>

			</div>

			<ol class="carousel-indicators">
				
				<?php for($i=0; $i<$slide; $i++){ ?>
					<li data-target="#slide" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo 'active'; } ?>"></li>
				<?php } ?>
				
			</ol>

		</div>

		<ul class="ico-page">
			<li>
				<a href="#nos" title="">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_page_nos.png" class="" alt="Nós"/>
					<span>Nós</span>
				</a>
			</li>

			<li>
				<a href="#realizamos" title="">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_page_realizamos.png" class="" alt="Realizamos"/>
					<span>Realizamos</span>
				</a>
			</li>

			<li>
				<a href="#sonhos" title="">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_page_sonhos.png" class="" alt="Sonhos"/>
					<span>Sonhos</span>
				</a>
			</li>
		</ul>

	</div>
</section>

<section class="box-content no-padding">
	<span id="nos" class="link_page_ancora"></span>

	<h3 class="sub-tituto-page">
		<div class="container"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_page_nos.png" class="" alt="Nós"/>Nós</div>
	</h3>

	<div class="container">

		<p class="sub-tituto text-content borda-efeito">
			<?php the_field('texto_longo'); ?>
		</p>

	</div>
</section>

<section class="box-content box-page-sobre sombra">
	<div class="container">

		<p class="sub-tituto text-content borda-efeito">
			<?php the_field('texto_longo'); ?>
		</p>

	</div>
</section>

<script type="text/javascript">
	jQuery(document).ready(function(){	    

	});

	jQuery(window).resize(function(){

	});
</script>