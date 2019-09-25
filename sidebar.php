<div class="side_bar">
    
    
    <div class="wedget_area">
        <?php dynamic_sidebar( 'sidebar-blog' ); ?>
    </div>

</div>



<!-- <div class="side_bar_search">
        <form action="<?php bloginfo( 'url' )?>">
            <input type="text" name="s" placeholder="Pesquisar...">
            <button><i class="fas fa-search"></i></button>
        </form>
    </div>
    <div class="category_wedget">
        <div class="wedget_title">
            <h4 class="sborder">Categorias</h4>
        </div>
        <ul>
            <?php wp_list_categories(array(
            'title_li' => ''
        )); ?>
        </ul>
    </div>
    <div class="tag_sidebar">
        <div class="wedget_title">
            <h4 class="sborder">Tag</h4>
        </div>
        <div class="tag_list">
            <ul class="tags">


                <?php

    $tags = get_tags('post_tag'); 
    if ( $tags ) :
        foreach ( $tags as $tag ) : ?>
                <li><a class="tag" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"
                        title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
                <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div> -->