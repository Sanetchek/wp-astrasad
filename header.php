<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- [if lt IE]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        
    </script>

    <?php wp_head(); ?>
</head>
<body>
<?php
if (is_page( 'portfolio' ) ):
    wp_redirect( bloginfo('template_url') . '/rabotyi' );
endif;
?>
<header id="header" class="container">
    <?php
    $site_email = get_option('site_email');
    $site_telephone1 = get_option('site_telephone1');
    $site_telephone2 = get_option('site_telephone2');
    ?>
    <div class="head-info">
        <div class="languages">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'languages',
                'container' => false
            ) );
            ?>
        </div>
        <div class="contact-info">
            <ul>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/phone.svg" alt="phone number" >
                    <a href="tel:<?php echo $site_telephone1 ?>"><?php echo $site_telephone1 ?></a>
                </li>
                <li>
                    <a href="tel:<?php echo $site_telephone2 ?>"><?php echo $site_telephone2 ?></a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/mail.svg" alt="email address" >
                    <a href="mailto:<?php echo $site_email ?>"><?php echo $site_email ?></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <nav id="toggle-menu">
        <div class="logo">
            <a href="<?php bloginfo('home'); ?>">
                <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="Logotype">
            </a>
        </div>
        <div id="toggle-button"><img src="<?php bloginfo('template_url'); ?>/images/menu.svg" alt="menu"></div>
        <nav id="toggle-nav-menu">
            <div class="nav-menu-left">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container' => false
                ) );
                ?>
            </div>
            <div class="nav-menu-right">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'secondary',
                    'container' => false
                ) );
                ?>
            </div>
        </nav>
    </nav>
    <nav id="nav-menu">
        <div class="nav-menu-left">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container' => false
            ) );
            ?>
        </div>
        <div class="logo">
            <a href="<?php bloginfo('home'); ?>">
                <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="Logotype">
            </a>
        </div>
        <div class="nav-menu-right">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'secondary',
                'container' => false
            ) );
            ?>
        </div>
    </nav>
</header>
<main id="main">