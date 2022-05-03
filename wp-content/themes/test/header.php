<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>agnecyt</title>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
		<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script> -->
		<!-- <link href="<?php echo get_template_directory_uri(); ?>/dist/output.css" rel="stylesheet"> -->
		<?php do_action('wp_head_my'); ?>
    </head>
    <body>
        <div class="wrapper">
            <header class="header">
                <div class="2xl:max-w-[1283px] bg-[#313030] w-full p-0 2xl:mx-auto">
                    <div class="">
                        <div class="menu__icon hidden">
                            <span></span>
                        </div>
                        <nav class="menu__body">
                            <ul class="menu__list md:justify-center py-[30px]">
                                <li><a data-goto=".home" href="#" class="menu__link hover:bg-red-500 py-8 px-6 text-white text-center"><?php the_field('header_1') ?></a></li>
                                <li><a data-goto=".portfolio" href="#" class="menu__link hover:bg-red-500 py-8 px-6 text-white text-center"><?php the_field('header_2') ?></a></li>
                                <li><a data-goto=".about__us" href="#" class="menu__link hover:bg-red-500 py-8 px-6 text-white text-center"><?php the_field('header_3') ?></a></li>
                                <li><a data-goto=".contact" href="#" class="menu__link hover:bg-red-500 py-8 px-6 text-white text-center"><?php the_field('header_4') ?></a></li>
                            </ul>
                        </nav>
                    </div>
                <div>
            </header>
