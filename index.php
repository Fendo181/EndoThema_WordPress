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
                        <div class="post-image">

                            <!--アイキャッチ画像があるか確認する。-->
                            <?php if(has_post_thumbnail()) : ?>
                                <!--アイキャッチ画像がある場合は表示する-->
                                 <?php the_post_thumbnail(array(100,100)); ?>

                                <!--アイキャッチ画像がない場合-->
                                <?php else: ?>
                                  <img src="<?php  echo get_template_directory_uri(); ?>/img/noimage.png" width="100" height="100">
                                <?php endif; ?>
                        </div>
                        <div class="post-body">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
                <!-- /post -->

                <?php
                endwhile;
            else:
            ?>

                    <p>記事はありませんよ!</p>

                    <?php
            endif;
            ?>
                        <!--preview_post_link()はループ文の外で使う事ができます。 -->
                        <div class="navigation">
                            <div class="prev"><?php  previous_posts_link();?></div>
                            <div class="next"><?php  next_posts_link(); ?></div>
                        </div>
        </div>
        <!-- /posts -->
        <!-- sidebar -->
        <?php get_sidebar(); ?>
    </div>
    <!-- /main -->
    <?php get_footer(); ?>