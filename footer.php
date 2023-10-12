
<footer>
        <div class="container">
            <div class="social">
                <a href="#">facebook </a>
                <a href="#">twitter </a>
                <a href="#">instagram </a>
                <a href="#">google plus </a>
                <a href="#">behance </a>
                <a href="#">dribbble  </a>
            </div>
            <?php if ( get_field('copyright_text', 'option') ) : ?>
                <?php echo get_field('copyright_text', 'option'); ?>
            <?php endif; ?>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
    
 
</body>
</html>
