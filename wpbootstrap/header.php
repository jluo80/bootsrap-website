<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Custom Theme files -->
    <link href="<?php bloginfo('stylesheet_url') ?>" rel='stylesheet' type='text/css' />
    <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target="#my-navbar">
    <!-- Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" id="my-navbar">
        <?php
          // Fix menu overlap
          if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>';
        ?>
        <!-- Container -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url')?>">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="滨海基金" style="height: 40px">
                </a>
            </div>
            <!-- Navbar header -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                 <?php
                            wp_nav_menu( array(
                                'menu'              => 'primary',
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                </ul>
            </div>
        </div>
        <!-- End container -->
    </nav>
    <!-- End navbar-->