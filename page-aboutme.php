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

/* Template Name: About Me */

get_header();
?>
<!doctype html>
    <div class="aboum">
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
        
    <!-- Introduction to who I am -->
        <div class="projTitl2">
            <img class="me" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/me.png" alt="Photo">
            <div class="textSEC2">
                <h3 class="summaryheadabou">
                    Hi there!
                </h3>
                <p class="summaryabou">
                    My name is Jay Neish. I am a Digital Designer 
                    / Front End Developer living in Western Australia.
                    <br><br>
                    I grew up with a fondness for action novels and comic books, 
                    which I believe has influenced how I work on a project. 
                    Attempting to tell a story through my designs makes the 
                    process much more enjoyable.
                    <br><br>
                    I hope that I can be of service to you!
                </p>
                <img class="unknown" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/arrow.gif" alt="Photo">
            </div>
        </div>
        
    <!-- "I have a certain set of skills" -->
        <div class="space"></div>
        
        <div class="projTitl2">
            <div class="textSEC3">
                <img class="graph" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/graph1.png" alt="Photo">
                <div class="summary2">
                    <h2>What can I do?</h2>
                    <p>
                        My strongest field would have to be website design, 
                        followed by illustration and photography.
                        <br><br>
                        I really enjoy thinking about layout and composition. 
                        Photography helps by allowing me to look at how elements 
                        of the real world can work together for an image.
                        <br><br>
                        Additionally, I have an interest in graphic design.
                        I completed classes in typography
                        and graphic design fundamentals during my time at university, 
                        and what I learned also helps with layout and composition.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="space"></div>
        
        <div class="projTitl2">
            <div class="textSEC3">
                <img class="graph" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/graph2.png" alt="Photo">
                <div class="summary2">
                    <h2>Software</h2>
                    <p>
                        I am very comfortable using Adobe software such as 
                        Photoshop, Illustrator, InDesign, Acrobat, and After Effects. 
                        <br><br>
                        For coding websites, Brackets is a text editor that I have 
                        become rather fond of. I also use a browser based workspace called C9 
                        (which is now part of Amazon), where Ruby and SASS are easily accessible.
                        <br><br>
                        WordPress is another web tool that I am comfortable using. 
                        Whether the project involves simply selecting a theme and plugins, 
                        or creating a theme (this portfolio website is my second attempt at creating a theme).
                    </p>
                </div>
            </div>
        </div>
        
        <div class="space"></div>
        
        <div class="projTitl2">
            <div class="textSEC3">
                <img class="graph" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/graph3.png" alt="Photo">
                <div class="summary2">
                    <h2>Coding Languages</h2>
                    <p>
                        I have a working understanding of the basics, 
                        namely HTML and CSS. I am comfortable 
                        using SASS to better organise CSS.
                        <br><br>
                        I also have experience working with JavaScript and jQuery. 
                        <br><br>
                        PHP, MySQL, .Net, and C# are additional languages 
                        that I have exposure to.
                        <br><br>
                        I am more than willing to learn a software or language 
                        that I do not know if required to do so.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="space"></div>
        
        <div class="projTitl2">
            <!-- Contact Form-->
                <form method="post" action="mail.php" class="contForm2">
                    <div id="fn">
                        First Name:<br>
                        <input type="text" name="name" class="name2 ut2">
                    </div>
                    <div id="sn">
                        Surname:<br>
                        <input type="text" name="name" class="name2 ut2"><br>
                    </div>
                    <div class="inp">
                        Company Name:<br>
                        <input type="text" name="company" class="ut2"><br>
                    </div>
                    <div class="inp">
                        Email Address:<br>
                        <input type="text" name="emailaddress" class="ut2"><br>
                    </div>
                    <div class="inp">
                        What can I do for you?<br>
                        <textarea rows="20" type="text" name="message" id="messold2"></textarea>
                    </div>
                    <div class="send">
                        <input type="submit" value="Submit" class="buttsen2">
                    </div>
                </form>
            
            <div class="textSEC4">
                <div class="summary4">
                    <img class="git" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/mail.png" alt="Photo">
                    
                     <!-- social media links? -->
                                <i class="fas fa-envelope social"></i>
                                <i class="fab fa-linkedin social"></i>
                                <i class="fab fa-instagram social"></i>
                                <i class="fab fa-twitter-square social"></i>
                </div>
            </div>
        </div>
        
        <div class="space"></div>
    </div>
<?php
get_footer();
?>