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

/* Template Name: Illustrations */

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
        
    <!-- Introduction to my illustration -->
        <div class="projTitl">
            <div class="IMGSEC2">
                <img class="stration" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/monsters.jpg" alt="Photo">
                <img class="stration2" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/fox.jpg" alt="Photo">
                <img class="stration2" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/lizards.jpg" alt="Photo">
            </div>
            
            <div class="textSEC">
                <h3 class="summaryheadpro">
                    Illustrations
                </h3>
                <p class="summarypro">
                    I often like to start a short series of
                    illustrations with a theme in mind.
                    <br><br>
                    It either involves focusing on a particular 
                    design fundamental, or trying to share 
                    a story or idea.
                    <br><br>
                    I am currently attempting to create
                    characters for a web comic so that I have 
                    a motive to draw more often.
                </p>
                <img class="projarrow" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/arrow.gif" alt="Photo">
            </div>
        </div>
        
        
        <div class="display">
            <div id="illustrations">
                <?php
    			   	$args = array(
    			   			'post_type' => 'illustrations',
    			   			'orderby' => 'menu_order',
    			   			'order' => 'ASC',
    			   		);
    			   	$illustrations = new WP_Query($args);
    		    ?>
    		    
    		    <?php if( $illustrations->have_posts() ): ?>
				<?php while( $illustrations->have_posts() ) : $illustrations->the_post(); ?>
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
        
    </div>
<?php
get_footer();
?>