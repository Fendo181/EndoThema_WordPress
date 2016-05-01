<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <!-- ブログ名の横に'|'を出力します! -->
    <title><?php wp_title('|',true,'right'); bloginfo('name');?></title>
    
    <meta name="description" content="Endo_WP_Thema" />
    <meta name="keywords" content="" />
    
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset-context/cssreset-context-min.css">
    <!-- et_stylesheet_uri()は get_stylesheet_directory_uri() のパスに対して付与される 'style.css' となります。 -->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_stylesheet_uri(); ?>">
</head>

<body>
    <div id="header" class="container">
        <h1><a href="<?php echo home_url('/'); ?>"><?php echo bloginfo('name');?></a></h1>
        <ul class="menu">
          <!--{ 管理画面からのメニューの追加}-->
          
          <?php wp_nav_menu(); ?>
          
           <!-- {testcode}上のメニューバー
            <li><a href="">メニュー</a></li>
            <li><a href="">メニュー</a></li>
            <li><a href="">メニュー</a></li>
            -->
        </ul>
    </div>
    <!-- /header -->
    
   <!-- headerファイルの最後に必ず入れる! -->
   <?php wp_head() ?>