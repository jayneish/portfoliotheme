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

/* Template Name: Photography */

get_header();
?>
<!doctype html>
    <div class="photog">
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
        
    <!-- Introduction to my photography -->
        <div class="projTitl">
            <div class="IMGSEC">
                <img class="p1" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/raven2.jpg" alt="Photo">
                <img class="p2" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/7seven.jpg" alt="Photo">
                <img class="p2" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/heliosv2.jpg" alt="Photo">
            </div>
            
            <div class="textSEC">
                <h3 class="summaryheadpro">
                    Photography
                </h3>
                <p class="summarypro">
                    Photography is something that I really enjoy.
                    <br><br>
                    I recently developed an enthusiasm for collecting and using vintage lenses.
                    <br><br>
                    There is something about the bokeh of an older lens that I find more appealing.
                    Plus - they are a little bit more affordable than newer lenses.
                </p>
                <img class="projarrow" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/arrow.gif" alt="Photo">
            </div>
        </div>
        
        <div class="display">
            <div id="photography">
                <?php
    			   	$args = array(
    			   			'post_type' => 'photography',
    			   			'orderby' => 'menu_order',
    			   			'order' => 'ASC',
    			   		);
    			   	$photography = new WP_Query($args);
    		    ?>
    		    
    		    <?php if( $photography->have_posts() ): ?>
				<?php while( $photography->have_posts() ) : $photography->the_post(); ?>
					<div class="photoposts">
						<h2 class="phototitle"><?php the_title(); ?></h2>
						<div class="popup-gallery">
						    <?php the_content(); ?>
						</div>
					</div>
				<?php endwhile ?>
			    <?php else: ?>
				    <p>Sorry, we currently don't have any photography to show.</p>
			    <?php endif; ?>
    	    </div>
        </div>
    </div>
    
<?php
get_footer();
?>