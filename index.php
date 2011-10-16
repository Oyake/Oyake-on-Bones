<?php get_header(); ?>
			
			<div id="content" class="clearfix">
			
				<div id="main" class="col540 left clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
						
						<header>
							
							<h1 class="h3"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							
							<p class="meta">
                                                            <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
                                                                <?php the_time('F j, Y'); ?>
                                                            </time>
                                                            <?php _e(" | ", "oyaketheme"); ?>
                                                            <span class="author">
                                                                <?php the_author_posts_link(); ?> 
                                                            </span>
                                                            <?php _e(" | ", "oyaketheme"); ?>
                                                            <span class="category">
                                                                <?php the_category(', '); ?>
                                                            </span>
                                                            .
                                                        </p>
						
						</header> <!-- end article header -->
					
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