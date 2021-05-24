<?php get_header(); ?>

	<section id="home">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	      <li data-target="#myCarousel" data-slide-to="3"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" role="listbox">
	                    <div class="item active">
	                        <img class="img-carrou" src="<?php echo get_template_directory_uri(); ?>/imagens/fotos/Costeladeporco.jpg" alt="Cheeseburguer de Costela de Porco">
	                        <div class="carousel-caption">
	                            <h3>
	                                MR. COSTELA DE PORCO</h3>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <img class="img-carrou" src="<?php echo get_template_directory_uri(); ?>/imagens/fotos/burguer.jpg" alt="Cheeseburguer de Costela">
	                        <div class="carousel-caption">
	                            <h3>
	                                MR. COSTELA DUPLO</h3>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <img class="img-carrou" src="<?php echo get_template_directory_uri(); ?>/imagens/fotos/fishandchips.jpg" alt="Fish and Chips">
	                        <div class="carousel-caption">
	                            <h3>
	                                FISH AND CHIPS</h3>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <img class="img-carrou" src="<?php echo get_template_directory_uri(); ?>/imagens/fotos/saladatilapia.jpg" alt="Salada de Tilápia">
	                        <div class="carousel-caption">
	                            <h3>
	                                SALADA DE TILÁPIA</h3>
	                        </div>
	                    </div>
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>
	</div>
	</section>

	<section id="mritos">
		<div class="text-center container mritos">
			<h5>O RESTAURANTE</h5>
			<h1 class="titulos">MR. ITO'S</h1>
			<p class="text-left col-sm-12">O Especialista em Fish and Chips, o Amante de Burguers e o Degustador de Chopp. Pratos feitos com os melhores ingredientes para que nosso menu seja apreciado por todos aqueles que possuem o paladar aguçado.</p>

			<div id="links">
			    <a href="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/01.jpg" title="MR. ITO'S" data-gallery>
			        <img class="img-responsive col-sm-4 center-block" src="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/mr1.jpg" alt="Mr. Itos">
			    </a>
			    <a href="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/02.jpg" title="MR. ITO'S" data-gallery>
			        <img class="img-responsive col-sm-4 center-block" src="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/mr2.jpg" alt="Mr. Itos">
			    </a>
			    <a href="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/06.jpg" title="MR. ITO'S" data-gallery>
			        <img class="img-responsive col-sm-4 center-block" src="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/mr6.jpg" alt="Mr. Itos">
			    </a>
			    <a href="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/03.jpg" title="MR. ITO'S" data-gallery>
			        <img class="img-responsive col-sm-4 center-block" src="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/mr3.jpg" alt="Mr. Itos">
			    </a><a href="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/04.jpg" title="MR. ITO'S" data-gallery>
			        <img class="img-responsive col-sm-4 center-block" src="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/mr4.jpg" alt="Mr. Itos">
			    </a>
			    <a href="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/05.jpg" title="MR. ITO'S" data-gallery>
			        <img class="img-responsive col-sm-4 center-block" src="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/mr5.jpg" alt="Mr. Itos">
			    </a>
			    <a href="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/07.jpg" title="MR. ITO'S" data-gallery>
			        <img class="img-responsive col-sm-4 center-block" src="<?php echo get_template_directory_uri(); ?>/imagens/thumbnails/mr7.jpg" alt="Mr. Itos">
			    </a>
			</div>

			<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
			<div id="blueimp-gallery" class="blueimp-gallery" data-use-bootstrap-modal="false">
			    <!-- The container for the modal slides -->
			    <div class="slides"></div>
			    <!-- Controls for the borderless lightbox -->
			    <h3 class="title"></h3>
			    <a class="prev">‹</a>
			    <a class="next">›</a>
			    <a class="close">×</a>
			    <a class="play-pause"></a>
			    <ol class="indicator"></ol>
			    <!-- The modal dialog, which will be used to wrap the lightbox content -->
			    <div class="modal fade">
			        <div class="modal-dialog">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" aria-hidden="true">&times;</button>
			                    <h4 class="modal-title"></h4>
			                </div>
			                <div class="modal-body next"></div>
			                <div class="modal-footer">
			                    <button type="button" class="btn btn-default pull-left prev">
			                        <i class="glyphicon glyphicon-chevron-left"></i>
			                        Previous
			                    </button>
			                    <button type="button" class="btn btn-primary next">
			                        Next
			                        <i class="glyphicon glyphicon-chevron-right"></i>
			                    </button>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>

		</div>
	</section>

	<section id="divi1">
		<div class="container text-center">
			<h1>"COMER E BEBER BEM, QUE MAL TEM?"</h1>
			<p>HAPPY HOUR TODOS OS DIAS DAS 18H ÀS 20H <br> CURTA NOSSA PÁGINA NO FACEBOOK E DESCUBRA AS PROMOÇÕES</p>
		</div>
	</section>

	<section id="cardapio">
		<div class="text-center container">
			<h5>NOSSO</h5>
			<h1 class="titulos">CARDÁPIO</h1>
		</div>
		<div class="cardapio-fish text-center padding-cardapio"><h1>FISH AND CHIPS</h1></div>
		<div class="container">

			<div class="col-sm-12">

				<?php
			                $args = array(
			                'post_type' => 'fish',
			                'posts_per_page' => 10
			                );
			                $attorney = new WP_Query( $args );
			                while ( $attorney->have_posts() ) : $attorney->the_post();
			                ?>

					<div class="col-sm-12 cardtext text-left">
						<h2 class="text-left"><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>	
					</div
>
			<?php endwhile; ?>
			</div>

		</div>

		<div class="cardapio-burguer text-center padding-cardapio"><h1>BURGUER</h1></div>
		<div class="container">
			<div class="col-sm-12">
				
				<?php
			                $args = array(
			                'post_type' => 'burguer',
			                'posts_per_page' => 10
			                );
			                $attorney = new WP_Query( $args );
			                while ( $attorney->have_posts() ) : $attorney->the_post();
			                ?>

					<div class="col-sm-12 cardtext text-left">
						<h2 class="text-left"><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>	
					</div
>
			<?php endwhile; ?>
			</div>
		</div>


		<div class="cardapio-saladas text-center padding-cardapio"><h1>SALADAS</h1></div>
		<div class="container">
			<div class="col-sm-12">
				
				<?php
			                $args = array(
			                'post_type' => 'salada',
			                'posts_per_page' => 10
			                );
			                $attorney = new WP_Query( $args );
			                while ( $attorney->have_posts() ) : $attorney->the_post();
			                ?>

					<div class="col-sm-12 cardtext text-left">
						<h2 class="text-left"><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>	
					</div
>
			<?php endwhile; ?>
			</div>
		</div>

		<div class="cardapio-chips text-center padding-cardapio"><h1>PETISCOS</h1></div>
		<div class="container">
			<div class="col-sm-12">
				<?php
			                $args = array(
			                'post_type' => 'chip',
			                'posts_per_page' => 10
			                );
			                $attorney = new WP_Query( $args );
			                while ( $attorney->have_posts() ) : $attorney->the_post();
			                ?>



				<div class="col-sm-12 cardtext text-left">
					<h2 class="text-left"><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>	
				</div>

			<?php endwhile; ?>
			</div>
		</div>

		<div class="cardapio-chopp text-center padding-cardapio"><h1>BEBIDAS</h1></div>
		<div class="container">
			<div class="col-sm-12">
				<?php
			                $args = array(
			                'post_type' => 'bebida',
			                'posts_per_page' => 10
			                );
			                $attorney = new WP_Query( $args );
			                while ( $attorney->have_posts() ) : $attorney->the_post();
			                ?>


				<div class="col-sm-12 cardtext text-left">
					<h2 class="text-left"><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>	
				</div>

			<?php endwhile; ?>
			</div>
		</div>
	</section>

	<section id="contato">
		<div class="text-center container">
			<h5>ENTRE EM</h5>
			<h1 class="titulos">CONTATO</h1>

			<div class="col-md-4">
		      <p><span class="glyphicon glyphicon-map-marker"></span>R. Chile, 2086 - Rebouças</p>
		    </div>

		    <div class="col-md-4">
		      <p><span class="glyphicon glyphicon-phone"></span>Telefone: (41)3044-6560</p>
		    </div>

		    <div class="col-md-4">
		      <p><span class="glyphicon glyphicon-envelope"></span>Email: contato@mritos.com.br</p>
		    </div>

			<div class="col-md-5  text-center padding50">
		      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmritos.curitiba%2F&tabs=likes&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		    </div>
		    <div class="col-md-7 padding50">
		      <div class="row">
		        <div class="col-sm-6 form-group">
		          <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" required>
		        </div>
		        <div class="col-sm-6 form-group">
		          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
		        </div>
		      </div>
		      <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Mensagem" rows="5"></textarea>
		      <br>
		      <div class="row">
		        <div class="col-md-12 form-group">
		          <button class="btn pull-right" type="submit">Send</button>
		        </div>
		      </div>
		    </div>
		</div>
	</section>
	
	<div id="gmaps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d814.8401487306342!2d-49.269380873279125!3d-25.45206369787728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce4735ee45f79%3A0x675e77a359617234!2sMr.Ito&#39;s!5e0!3m2!1spt-BR!2sbr!4v1486507937998" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>

<?php get_footer(); ?>	