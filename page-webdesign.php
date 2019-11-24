<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PortfolioRedesign
 */

/* Template Name: Websitedesign */

get_header();
?>
<!doctype html>
    <div class="webum">
    <!-- Menu on the side that gets bigger when the hamburger is clicked on -->
        <div class="projectPageMenu">
            <div class="pPM">
                <i class="fas fa-bars pram"></i>
                <i class="fas fa-times plro"></i>
                
                <header id="masthead" class="site-header">
            		<nav id="site-navigation" class="main-navigation pmn">
            			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'portfolioredesign' ); ?></button>
            			<?php
            			wp_nav_menu( array(
            				'theme_location' => 'menu-1',
            				'menu_id'        => 'primary-menu',
            			) );
            			?>
            		</nav><!-- #site-navigation -->
            	</header><!-- #masthead -->
                
            </div>
        </div>
        
        <!-- Introduction to my web design -->
        <div class="projTitl">
            <div class="IMGSEC">
                <img class="p1" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/taskflowd.jpg" alt="Photo">
                <img class="p2" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/lyfe.jpg" alt="Photo">
                <img class="p2" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/error.jpg" alt="Photo">
            </div>
            
            <div class="textSEC">
                <h3 class="summaryheadpro">
                    Design
                </h3>
                <p class="summarypro">
                    The reason I went to university to study design was because 
                    I knew I wanted to do something creative.
                    <br><br>
                    I find a lot of enjoyment in website design. 
                    I wish to find work in front end development.
                    <br><br>
                    Graphic design is also a field of interest that I would love to explore.
                </p>
                <img class="projarrow" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/arrow.gif" alt="Photo">
            </div>
        </div>
        
        <div class="display">
            <div id="webdesign">
                <?php
    			   	$args = array(
    			   			'post_type' => 'webdesign',
    			   			'orderby' => 'menu_order',
    			   			'order' => 'ASC',
    			   		);
    			   	$webdesign = new WP_Query($args);
    		    ?>
    		    
    		    <?php if( $webdesign->have_posts() ): ?>
				<?php while( $webdesign->have_posts() ) : $webdesign->the_post(); ?>
					<article class="webposts">
						<div class="thumbnail">
    						<?php if ( has_post_thumbnail () ): ?>
    						    <?php add_theme_support( 'post-thumbnails' ); ?>
    				            <?php the_post_thumbnail( 'full', array('class' => 'webphoto') ); ?>
    				        <?php endif; ?>
				        </div>
				        <div class="webpcontent">
				            <h2 class="webtitle"><?php the_title(); ?></h2>
						    <?php the_content(); ?>
						</div>
						
						<div class="clear"></div>
					</article>
				<?php endwhile ?>
			    <?php else: ?>
				    <p>Sorry, we currently don't have any website design projects to show.</p>
			    <?php endif; ?>
    	    </div>
        </div>
    </div>
<?php
get_footer();
?>