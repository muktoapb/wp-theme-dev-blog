<?php
    /*
    Template Name: Home
    */
?>
<?php get_header(); ?>

        <!--HOME-->
        <section class="home" id="home" style="background:url(<?php the_field('hero_background')?>) 50% 50% fixed"> 
                <div class="home-content">
                    <div class="container">
                        <h1><?php echo get_field('main_heading'); ?> <span class="element" data-text1="<?php echo get_field('animated_text_1'); ?>" data-text2="<?php echo get_field('animated_text_2'); ?>" data-loop="true" data-backdelay="3000"></span></h1> 

                        <?php if ( have_rows('social') ) : ?>
                            <div class="social">
                            <?php while( have_rows('social') ) : the_row(); ?>
                        <a href="<?php the_sub_field('url'); ?>" target="_blank" rel="noopener noreferrer">
                        <?php the_sub_field('icon'); ?>
                    </a>
                                
                        
                            <?php endwhile; ?>
                        </div>
                            
                        
                        <?php endif; ?>
                        
                        
                        <a class="home-down bounce" href="#about"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            <svg class="diagonal home-left" width="21%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 100 L100 100 L0 10 Z"></path>
            </svg>
            <svg class="diagonal home-right" width="80%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 100 L100 100 L100 10 Z"></path>
            </svg>
        </section>

        <!--ABOUT-->
        <section class="about dgray-bg" id="about">
            <div class="about type-1 padbot_120">
                <div class="container">
                    <!-- about image -->
                    <div class="col-md-4 col-sm-12 about-image top_30 wow fadeInUp"  data-wow-delay="0.4s">
                        <div class="row">
                           <?php if ( get_field('about_image') ) : $image = get_field('about_image'); ?>
                            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"/>
                           
                           <?php endif; ?>
                           
                        </div>
                    </div>
                    <!-- about text -->
                    <div class="col-md-7 col-md-offset-1 col-sm-12 about-text wow fadeInUp"  data-wow-delay="0.6s">
                        <div class="section-title dleft bottom_30">
                          <br>
                           <?php if ( get_field('about_heading') ) : ?>
                           <h2><?php echo get_field('about_heading'); ?></h2>
                           <?php endif; ?>
                           
                        </div>
                        <?php echo get_field('about_content'); ?>
                    </div>
                    
                    <!-- work areas -->
                    <?php if ( have_rows('services_slider') ) : ?>
                        <div class="owl-carousel work-areas top_120 bottom_120 wow fadeInUp" data-pagination="false" data-autoplay="3000" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-tablet-small="1"  data-wow-delay="0.4s">
                        
                        <?php while( have_rows('services_slider') ) : the_row(); ?>
                    
                        <div class="area col-md-12 item">
                            <div class="icon">
                                <?php echo get_sub_field('icon'); ?>
                            </div>
                            <div class="text">
                                <h6><?php echo get_sub_field('title'); ?></h6>
                                <p><?php echo get_sub_field('details'); ?></p>
                            </div>
                        </div>
                    
                        <?php endwhile; ?>
                    
                    </div>
                    <?php endif; ?>
                    
                   

                </div>
            <svg class="diagonal-gray" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 0 L70 100 L100 0 Z"></path>
            </svg>
            </div>
        </section>    
        
        <!--PORTFOLIO-->
        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-title dleft top_120 bottom_90">
                    <h2>PORTFOLIO</h2>
                    <div class="portfolio_filter">
                        <ul>
                            <li class="select-cat" data-filter="*">All</li>
                            <li data-filter=".web-design">Web Design</li>
                            <li data-filter=".aplication">Applications</li>
                            <li data-filter=".development">Development</li>
                        </ul>
                    </div>
                </div>
                <!--Portfolio Items-->  
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="isotope_items row">
                            <!-- Item -->
                            <a href="https://www.youtube.com/watch?v=M-M3rdL_WLQ" class="popup-youtube single_item link development col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <i class="fa fa-play" aria-hidden="true"></i>   
                                <figure>
                                    <img src="images/work-1.jpg" alt=""> 
                                    <figcaption>
                                        <div class="outter">
                                            <div class="inner">
                                                <span>Web Design</span>
                                                <h3 class="title">Biggest Cover</h3>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                            <!-- Item -->
                            <a href="images/work-2.jpg" class="single_item link aplication col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                                <figure>
                                    <img src="images/work-2.jpg" alt=""> 
                                    <figcaption>
                                        <div class="outter">
                                            <div class="inner">
                                                <span>Photography</span>
                                                <h3 class="title">Easy Documentation</h3>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                            <!-- Item -->
                            <a href="images/work-3.jpg" class="single_item link development col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                                <figure>
                                    <img src="images/work-3.jpg" alt=""> 
                                    <figcaption>
                                        <div class="outter">
                                            <div class="inner">
                                                <span>Art</span>
                                                <h3 class="title">Cup of Coffee</h3>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                            <!-- Item -->
                            <a href="images/work-4.jpg" class="single_item link web-design col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.2s">
                                <figure>
                                    <img src="images/work-4.jpg" alt=""> 
                                    <figcaption>
                                        <div class="outter">
                                            <div class="inner">
                                                <span>Branding</span>
                                                <h3 class="title">Bag Design</h3>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                            <!-- Item -->
                            <a href="images/work-5.jpg" class="single_item link aplication col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.5s">
                                <figure>
                                    <img src="images/work-5.jpg" alt=""> 
                                    <figcaption>
                                        <div class="outter">
                                            <div class="inner">
                                                <span>Web Design</span>
                                                <h3 class="title">Cd Cover</h3>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                            <!-- Item -->
                            <a href="images/work-6.jpg" class="single_item link aplication col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.8s">
                                <figure>
                                    <img src="images/work-6.jpg" alt=""> 
                                    <figcaption>
                                        <div class="outter">
                                            <div class="inner">
                                                <span>Application</span>
                                                <h3 class="title">The Notebook</h3>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    </div>
            </div>
            <svg class="diagonal-white" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 0 L30 100 L100 0 Z"></path>
            </svg>
        </section>

        <!-- BLOG -->
        <section class="blog" id="blog">
            <div class="container-fluid dgray-bg padbot_200">
                <div class="container">
                    <div class="section-title dright top_120 bottom_45">
                        <h2>LATEST BLOGS</h2>
                    </div>
                    <!-- Blogs -->
                    <div class="row">
                        <a href="single-blog.html" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-content wow fadeInUp" data-wow-delay="0.4s">
                            <div class="blog-image">
                                <img src="images/blog-1.jpg">
                            </div>
                            <h2 class="blog-title">By spite about do of do allow blush</h2>
                            <p>Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat.  </p>
                            <span class="blog-info"><span>Larry Stark</span> - 7 September 2016 </span>
                        </a>
                        <a href="single-blog.html" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-content wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-image">
                                <img src="images/blog-2.jpg">
                            </div>
                            <h2 class="blog-title">Two Before Arrow Not Relied</h2>
                            <p>Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat.  </p>
                            <span class="blog-info"><span>Larry Stark</span> - 7 September 2016 </span>
                        </a>
                        <a href="single-blog.html" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-content wow hidden-sm fadeInUp" data-wow-delay="0.8s">
                            <div class="blog-image">
                                <img src="images/blog-3.jpg">
                            </div>
                            <h2 class="blog-title">Behind Sooner Dining so Window </h2>
                            <p>Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat.  </p>
                            <span class="blog-info"><span>Larry Stark</span> - 7 September 2016 </span>
                        </a>
                        <a href="blog-page.html" class="sitebtn pull-right top_45">Load More</a>
                    </div>
                </div>
                <svg class="diagonal-gray" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                    <path d="M0 0 L70 100 L100 0 Z"></path>
                </svg>
            </div>
        </section>
        
        <!-- CONTACT -->
        <section class="contact" id="contact">
            <div class="container">
                
                <div class="section-title dleft top_120">
                    <h2 class="bottom_30">GET IN TOUCH</h2>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- Contact Info -->
                    <ul class="contact-info row">
                        <li>1444 S. Alameda Street Los Angeles, California 90021</li>
                        <li><br>hi@berlin.com</li>
                        <li>0800 123 456789</li>
                    </ul>
                    <div class="social-icons top_60 row"> 
                        <a class="fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                        <a class="tw" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                        <a class="ins" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> 
                        <a class="bh" href="#"><i class="fa fa-behance" aria-hidden="true"></i></a> 
                        <a class="dr" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a> 
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-2 form top_30 bottom_90 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="page-title sub">
                            <h5>leave us a message</h5>
                        </div>
                        <form class="contact-form top_60" method="POST" action="mail.php">
                            <div class="row">
                                <!--Name-->
                                <div class="col-md-6">
                                    <input id="con_name" name="con_name" class="form-inp requie" type="text" placeholder="Name">
                                </div>
                                <!--Email-->
                                <div class="col-md-6">
                                    <input id="con_email" name="con_email" class="form-inp requie" type="text" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <!--Message-->
                                    <textarea name="con_message" id="con_message" class="requie" placeholder="How can I help you?" rows="8"></textarea>
                                    <button id="con_submit" class="sitebtn top_30 pull-right" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </section>

<?php get_footer()?>