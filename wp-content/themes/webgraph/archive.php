<?php get_header();?>
<!-- breadcrum start -->
<div class="breadcrum img-fluid img-responsive">
    <div class="breadcrum_content">
        <h2><a href="#!">Home </a>/ Archive</h2>
        <hr>
    </div>
</div>
<!-- breadcrum end -->
<div class="blog_content">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="blog_area">
                    <div class="row">
                        <?php
                            if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/post/content', get_post_format() );

                            endwhile;
                            ?>
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="pagination-area">
                                    <ul class="pagination">
                                        <?php echo paginate_links(); ?>
                                    </ul>
                                </div>
                            </div>        
                            <?php
                            else :

                                get_template_part( 'template-parts/post/content', 'none' );

                            endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <?php get_sidebar();?>
            </div> 
        </div>
    </div>  
</div>
<?php get_footer();?>