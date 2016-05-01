<?php get_header(); ?>

    <div id="main" class="container">
        <!-- posts -->
        <div id="posts">
            <!--   wordpress 投稿記事内容の決まり文句 -->
            <?php
            if(have_posts()) :
                while(have_posts()) :
                    the_post();
            
            ?>

                <div class="post">
                    <!--ポストヘッダー -->
                    <div class="post-header">
                        <h2>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                        <div class="post-meta">
                            <?php get_the_date(); ?> 【
                                <?php the_category(', '); ?>】
                        </div>
                    </div>
                    <!--/ポストヘッダー -->

                    <!--ポストコンテントー -->
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div class="navigation">
                    <div class="prev">
                        <?php  previous_post_link();?>
                    </div>
                    <div class="next">
                        <?php  next_post_link(); ?>
                    </div>
                </div>
                <?php
                        endwhile;
                    else:
                    ?>

                    <p>記事はありませんよ!</p>

                    <?php
                        endif;
                    ?>
        </div>
        <!-- /posts -->
        <!-- sidebar -->
        <?php get_sidebar(); ?>
    </div>
    <!-- /main -->
    <?php get_footer(); ?>