<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>

<footer class="bg-[#313030] w-full px-4 xl:px-0">
                <div class="2xl:max-w-[1283px] xl:max-w[1200px] lg:max-w-[1024px] mx-auto">
                    <div class="flex flex-col-reverse md:flex-row items-center md:justify-between">
                        <p class="py-8 text-[#afafaf]"><?php the_field('footer_copyright') ?></p>
                        <div class="flex py-8">
                            <a href="<?php the_field('footer_image_link_1') ?>" class="mr-5">
                                <img src="<?php the_field('footer_image_1') ?>" alt="">
                            </a>
                            <a href="<?php the_field('footer_image_link_2') ?>" class="mr-5">
                                <img src="<?php the_field('footer_image_2') ?>" alt="">
                            </a>
                            <a href="<?php the_field('footer_image_link_3') ?>" class="mr-5">
                                <img src="<?php the_field('footer_image_3') ?>" alt="">
                            </a>
                            <a href="<?php the_field('footer_image_link_4') ?>">
                                <img src="<?php the_field('footer_image_4') ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>

<?php wp_footer(); ?>

