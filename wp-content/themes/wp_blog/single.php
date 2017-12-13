<!--
    ** single.php - display the single post 

    **please check the default post shows page in the wordpress settings -reading in set the posts diplays the which page shows the posts.
 -->
<?php get_header(); ?>
<div class="row">

    <div class="col-sm-8 blog-main">
        <!-- have_posts() function chack the is avail posts or not  -->
        <?php if(have_posts()) : ?>
            <?php   while (have_posts()) : the_post(); ?>

                <div class="blog-post">
                    <h2 class="blog-post-title">
                        <!-- shows the title fo the posts -->
                        <?php the_title(); ?>
                    </h2>
                    <p class="blog-post-meta">
                        <!-- shows the created posts date -->
                        <?php the_date(); ?> 
                        <!-- this functions shows that only authors posts displays  -->
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> 
                        <!-- display the name of the author -->
                            <?php the_author(); ?>
                        </a>
                    </p>
                    
                    <!-- set the function.php in theme support code 
                        check the posts has a feature img or not .
                     -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumb">
                        <!-- display the posts thumbnail  -->
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <!-- display the full content of the posts -->
                    <?php the_content(); ?>
                    <hr>
                    <!-- you can create the comments.php for custom comment box -->
                    <!-- display the comments template // comment box and comments  -->
                    <?php  comments_template(); ?>
                </div><!-- /.blog-post -->
            <!-- endwhile -->
            <?php  endwhile; ?>
            <!-- else portion -->
        <?php else:  ?>
            <!-- display message if posts not avail -->
            <p><?php __('No post found'); ?></p>
        <?php  endif; ?>

    </div><!-- /.blog-main -->

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
        <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>
                <li><a href="#">February 2014</a></li>
                <li><a href="#">January 2014</a></li>
                <li><a href="#">December 2013</a></li>
                <li><a href="#">November 2013</a></li>
                <li><a href="#">October 2013</a></li>
                <li><a href="#">September 2013</a></li>
                <li><a href="#">August 2013</a></li>
                <li><a href="#">July 2013</a></li>
                <li><a href="#">June 2013</a></li>
                <li><a href="#">May 2013</a></li>
                <li><a href="#">April 2013</a></li>
            </ol>
        </div>
        <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
            </ol>
        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer(); ?>