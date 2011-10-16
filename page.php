<?php get_header(); ?>
			
			<div id="content" class="clearfix">
			
				<div id="main" class="col540 left clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
						
						<header>
							
							<h1 class="page-title"><?php the_title(); ?></h1>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>Not Found</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but the requested resource was not found on this site.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
					
                                <nav class="col300 right clearfix" role="navigation">
                                        <?php oyake_main_nav(); // Adjust using Menus in Wordpress Admin ?>
                                </nav>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>