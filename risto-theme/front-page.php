<?php get_header(); ?>

<section id="about-me" class="container clear">
	<div class="indent ">
			<?php 
			$query = new WP_Query( 'pagename=risto-jovanovic-about-me' );
			// The Loop
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : 
					$query->the_post();
			?>
					<?php the_title( '<h1 class="aligncenter">', '</h1>'); ?>
					<hr class="red aligncenter">
					<img src="<?php bloginfo('template_directory'); ?>/img/JRisto.jpg" alt="" class="img-small visible-xs">
					<div class="entry-content">
					<?php the_content(); ?> 
					</div>
				<?php endwhile; endif; ?>
			
			<?php 
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
	</div><!-- .indent -->
</section><!-- about-me -->

<section id="services" class="container clear">

	<div class="indent_3 ">

			<div class="title">

				<h1 class="textcenter ">Services</h1>

				<hr class="red aligncenter">

			</div>


			<?php 

			$args = array(

					'post_type' => 'services',
					'order'   => 'ASC'
				);

			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {

				echo '<div class="clear">';

				while ( $query->have_posts() ) {

					$query->the_post();

					echo '<div class=" size2 ">';

						if (has_post_thumbnail()) {
							
							the_post_thumbnail('services', array('class'=>'service-img'));
							
						}

						the_title( '<h1 class="textcenter">', '</h1>');

						echo '<div class="textcenter">';

						the_content();

						echo '</div> ';
					
					echo '</div>';
				}

				echo '</div>';
			}
			
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
	</div><!-- .indent -->
</section><!-- services -->


<section id="skills" class="container clear">

	<div class="indent_1 ">

			<div class="title">

				<h1 class="textcenter ">My Skills</h1>

				<hr class="red aligncenter">

			</div>

			<?php 
			$args = array(

					'post_type' => 'skill',
					'order'   => 'ASC'
				);
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {

				echo '<div class="clear">';

				while ( $query->have_posts() ) {

					$query->the_post();

					echo '<div class="together">';

						if (has_post_thumbnail()) {
							echo '<div class="skill-left">';
							the_post_thumbnail();
							echo '</div> ';
			
						}

						//the_title( '<h1 class="textcenter">', '</h1>');

						echo '<div class="textcenter skill-right">';
						the_content();
						echo '</div> ';
					
					echo '</div>';
				}

				echo '</div>';
			}
			
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
	</div><!-- .indent -->

</section><!-- skill-me -->

<section id="contact" class="container clear">
	<div class="indent map">
			<?php 
			$query = new WP_Query( 'pagename=ristojovanovic-contact-me' );
			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					the_title( '<h1 class="textcenter">', '</h1>');
					echo '<hr class="red aligncenter">';
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';
				}
			}
			
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
	</div><!-- .indent -->
</section><!-- contact-me -->

<?php get_footer(); ?>