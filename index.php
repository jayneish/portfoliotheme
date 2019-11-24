<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PortfolioRedesign
 */
 
 /* Template Name: Index */
 
 get_header();
?>
<!doctype html>
    <div class="index">
    <!-- Menu -->
        <div id="splsh">
            <div class="splashmenu">
                <i class="fas fa-bars ham"></i>
                <i class="fas fa-times clro"></i>
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
                
                <div id="intro">
                    <h1>Website Design</h1>
                    <h2>Photography and Illustration</h2>
                    <h2>Graphic Design</h3>
                    <p>
                        My name is Jay.
                        <br><br>
                        I am a Digital Designer and Front End Developer 
                        <br>based in Perth, Western Australia.
                        I also have a keen interest 
                        <br>in photography and illustration.
                    </p>
                    <img class="homearrow" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/arrow.gif" alt="Photo">
                </div>
            </div>
        </div>
        
        <div class="clear"></div>
        
        <div class="whiteBar"></div>
        
    <!-- Project Previews -->
        <div id="splpro">
            
        <!-- Web Design -->
            <div class="projects">
                <div class="projSect">
                    <div class="projOverlay left">
                        <div class="text">
                            <h1>Design</h1>
                            <p>
                                I am continuously trying to learn new programming languages to expand my web development skills.
                                For example, this website was made using what I learned from a full stack course on Udemy.com.
                                <br><br>
                                I do not do graphic design as often, but I enjoy the process just as much.
                                Printing out a physical copy of a design is a very pleasant experience.
                                <button type="button" value="Browse my Work" class="pobutt" onClick="window.location.href = ' https://pr-version2-jayneish.c9users.io/website-design/';">
                                    <span>Browse my Work</span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                
                <img class="projimg piright" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/ui1.jpg" alt="Website Design" style="margin-left:-13.5px;">
            </div>
            
            <div class="clear"></div>
            
        <!-- Photography -->
            <div class="projects">
                <div class="projSect">
                    <div class="projOverlay right">
                        <div class="text">
                            <h1>Photography</h1>
                            <p>
                                For a while now, I have enjoyed taking photos with a Canon 600D camera.
                                Recently, however, I have started collecting vintage lenses such as the Takumar SMC 55mm f2.
                                <br><br>    
                                I find that the bokeh and colour some older lenses capture is much more appealling
                                to me compared to most newer lenses.
                                <br>
                                <button type="button" value="Browse my Work" class="pobutt" onClick="window.location.href = 'https://pr-version2-jayneish.c9users.io/photography/';">
                                    <span>Browse my Work</span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                
                <img class="projimg pileft" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/raven1.jpg" alt="Photography">
            </div>
            
            <div class="clear"></div>
            
        <!-- Illustration -->
            <div class="projects">
                <div class="projSect">
                    <div class="projOverlay left">
                        <div class="text">
                            <h1>Illustration</h1>
                            <p>
                                Drawing is something that I have enjoyed doing for as long as I remember.
                                But it was not until starting university in 2015 that I was introduced to Wacom tablets and digital illustration.
                                <br><br>
                                Since then I have loved spending an hour or two every so often sketching with a Wacom.
                                <br>
                                <button type="button" value="Browse my Work" class="pobutt" onClick="window.location.href = 'https://pr-version2-jayneish.c9users.io/illustration/';">
                                    <span>Browse my Work</span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                
                <img class="projimg piright" src="https://pr-version2-jayneish.c9users.io/wp-content/uploads/2019/05/caninemammal2.jpg" alt="Illustration" style="margin-left:-13.5px;">
            </div>
            
            <div class="clear"></div>
        </div>
        
        <div class="whiteBar"></div>
        
        <div class="clear"></div>
        
    <!-- Contact From / Footer -->
        <div class="bottom">
            <div class="contact">
                <div class="conSect">
                    
                    <div id="error">
                        <?php
                            echo '<script language="javascript">';
                            echo 'alert($error.$successMessage)';
                            echo '</script>';
                        ?>
                    </div>
                    
                    <!-- Contact Form-->
                        <form method="post" action="mail.php" class="contForm">
                            <div id="fn">
                                First Name:<br>
                                <input type="text" name="name" class="name ut" maxlength="20">
                            </div>
                            <div id="sn">
                                Surname:<br>
                                <input type="text" name="name" class="name ut" maxlength="20"><br>
                            </div>
                            <div class="inp">
                                Company Name:<br>
                                <input type="text" name="company" class="ut" maxlength="25"><br>
                            </div>
                            <div class="inp">
                                Subject:<br>
                                <input type="text" id="subject" name="subject" class="ut" maxlength="25"><br>
                            </div>
                            <div class="inp">
                                Email Address:<br>
                                <input type="text" id="email" name="email" class="ut" maxlength="25"><br>
                            </div>
                            <div class="inp">
                                What can I do for you?<br>
                                <textarea type="text" name="message" id="messold" maxlength="500"></textarea>
                            </div>
                            <div class="send">
                                <input type="submit" value="Submit" class="buttsen">
                            </div>
                        </form>
                    
                    <div class="contaOverlay conRight">
                        <div id="conText">
                            <h1>Get in Touch!</h1>
                            <p>
                                Please feel free to get in touch if you have something you want me to get involved with and work on with you!
                                <br><br>
                                I will take on any challenge!
                                <br><br>
                                <button type="button" value="Find out More About me!" class="pobutt" onClick="window.location.href = 'https://pr-version2-jayneish.c9users.io/about-me/';">
                                    <span>Find out More About me</span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php
get_footer();
?>