
<footer>
        <div class="container">
            <?php if ( have_rows('social_links','option') ) : ?>
                <div class="social">
                <?php while( have_rows('social_links','option') ) : the_row(); ?>
            
                    <?php 
                    $link = get_sub_field('link');
                    
                    if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>
            
        
            
            <?php if ( get_field('copyright_text', 'option') ) : ?>
                <?php echo get_field('copyright_text', 'option'); ?>
            <?php endif; ?>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
    
 
</body>
</html>
