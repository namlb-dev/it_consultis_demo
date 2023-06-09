<?php
get_header();

$option_fields = get_fields('options');

?>

<div id="primary">
    <div id="content" role="main">
        <div class="content-wrapper">
            <div class="flag"><?php echo do_shortcode( '[gtranslate]'); ?></div>
            <section class="py-24 lg:py-0 lg:py-0">
                <div class="container">
                    <div class="px-36 lg:py-10% lg:px-5%">
                        <h1 class="text-black text-3xl text-center font-bold"><?php echo __($option_fields['hero_title'], 'mytheme'); ?></h1>
                        <p class="text-dark-gray text-base text-center mt-8 px-24 leading-8 font-light lg:p-0"><?php echo __($option_fields['hero_description'], 'mytheme'); ?></p>
                    </div>
                </div>
            </section>

            <section class="bg-dark-red py-24 lg:py-0">
                <div class="container">
                    <div class="px-36 lg:py-10% lg:px-5%">
                        <p class="text-white text-base px-48 text-center leading-8 font-light xl:px-0"><?php echo __($option_fields['intro_subtitle'], 'mytheme'); ?></p>
                        <h2 class="text-white font-bold text-2xl mt-8 leading-8 text-center px-72 xl:px-0 lg:px-0"><?php echo __($option_fields['intro_title'], 'mytheme'); ?></h2>
                    </div>
                </div>
            </section>

            <section class="py-24 lg:py-0">
                <div class="container">
                    <div class="px-36 lg:py-10% lg:px-5%">
                        <h2 class="text-black font-bold text-3xl mt-8 leading-9 text-center"><?php echo __($option_fields['pillars_title'], 'mytheme'); ?></h2>
                        <div class="px-100px py-50px text-center lg:p-0 lg:mt-20px">
                            <div class="text-15 leading-6 font-light"><?php echo __($option_fields['pillars_description'], 'mytheme'); ?></div>
                        </div>

                        <div class="grid mt-30px grid-cols-4 md:grid-cols-2 gap-30px">
                            <?php foreach ($option_fields['list_of_pillars'] as $item) : ?>
                                <div class="rounded-20px bg-light-gray  py-40px px-20px">
                                    <div class="mb-60px">
                                        <img src="<?php echo $item['pillars_feature_image']; ?>" alt="">
                                    </div>
                                    <h3 class="text-secondary-black text-base font-bold text-center"><?php echo __($item['pillars_description'], 'mytheme'); ?></h3>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="flex justify-center mt-100px">
                            <a class="w-250 h-60px flex justify-center items-center bg-secondary-black hover:bg-dark-red text-13 text-white" href="<?php echo $option_fields['pillars_cta']['cta_url']; ?>">
                                <?php echo __($option_fields['pillars_cta']['cta_text'], 'mytheme'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-100px px-150px bg-light-gray xl:py-10% xl:px-5%">
                <div class="container">
                    <div class="px-36 xl:px-0 flex justify-between gap-130px md:flex-col-reverse">
                        <div class="flex flex-col items-start justify-center">
                            <p class="text-15 text-third-black font-light"><?php echo $option_fields['1st_achievement_subtitle']; ?></p>
                            <h2 class="mt-10px mb-30px font-bold text-24"><?php echo $option_fields['1st_achievement_title']; ?></h2>
                            <div class="list-achievement font-light text-dark-gray">
                                <?php echo $option_fields['1st_list_of_achievements']; ?>
                            </div>
                        </div>
                        <div class="w-300 flex justify-center items-center md:m-auto">
                            <img src="<?php echo $option_fields['1st_achievement_logo']; ?>" alt="" />
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-100px px-150px xl:py-10% xl:px-5%">
                <div class="container">
                    <div class="px-36 xl:px-0 flex justify-between gap-130px md:flex-col">
                        <div class="w-300 flex justify-center items-center md:m-auto">
                            <img src="<?php echo $option_fields['2nd_achievement_logo']; ?>" alt="" />
                        </div>
                        <div class="flex flex-col items-start justify-center">
                            <p class="text-15 text-third-black font-light"><?php echo $option_fields['2nd_achievement_subtitle']; ?></p>
                            <h2 class="mt-10px mb-30px font-bold text-24"><?php echo $option_fields['2nd_achievement_title']; ?></h2>
                            <div class="list-achievement font-light text-dark-gray">
                                <?php echo $option_fields['2nd_list_of_achievements']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-100px px-150px bg-light-gray xl:py-10% xl:px-5%">
                <div class="container">
                    <div class="px-36 xl:px-0 flex justify-center flex-col items-center">
                        <h2 class="text-30 font-bold mb-50px text-dark"><?php echo $option_fields['core_value_head_title']; ?></h2>
                        <p class="text-15 text-third-black font-light mb-50px"><?php echo $option_fields['core_value_description']; ?></p>


                        <?php foreach ($option_fields['list_of_core_values'] as $item) : ?>
                            <div class="bg-white rounded-20px py-40px px-30px flex justify-between mb-40px first:mt-50px lg:flex-col">
                                <div class="mr-30px lg:mr-0 lg:text-center">
                                    <img class="w-130 lg:m-auto lg:mb-20px" src="<?php echo $item['image']; ?>" alt="">
                                </div>
                                <div class="max-w-620 lg:text-center">
                                    <h3 class="text-20 mb-10px font-bold text-secondary-black">
                                        <?php echo $item['title']; ?>
                                    </h3>
                                    <p class="text-15 text-third-black font-light"><?php echo $item['description']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </section>

            <section class="py-100px px-150px xl:py-10% xl:px-5%">
                <div class="container">
                    <div class="px-36 xl:px-0 relative">
                        <h2 class="text-30 font-bold mb-50px text-dark text-center"><?php echo $option_fields['profle_title']; ?></h2>

                        <div class="slider">
                            <?php foreach ($option_fields['list_of_executives'] as $item) : ?>
                                <div class="item ">
                                    <div class="flex justify-between xl:justify-center md:flex-col">
                                        <div class="w-300 h-400 mr-30px xl:h-auto md:m-auto ">
                                            <img src="<?php echo $item['photo'];  ?>" alt="">
                                        </div>
                                        <div class="w-820 h-400 xl:h-auto xl:w-auto flex-2 md:text-center">
                                            <p class="text-30 text-third-black font-light"><?php echo $item['name'];  ?></p>
                                            <p class="font-light text-20 text-third-black mt-5px mb-20px"><?php echo $item['position'];  ?></p>

                                            <div class="">

                                                <p class="italic text-15 font-light text-third-black leading-26px mb-30px"><?php echo $item['data']['bio']; ?></p>

                                                <?php foreach ($item['data']['keywords'] as $keyword) : ?>
                                                    <h2 class="text-light-gray text-60 font-bold leading-65px italic"><?php echo $keyword['keyword']; ?></h2>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="arrows">
                            <ul>
                                <li class="prev"><img src="/wp-content/themes/ms-theme/assets/images/chevron_left.png" alt=""></li>
                                <li class="next"><img src="/wp-content/themes/ms-theme/assets/images/chevron_right.png" alt=""></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->
<script>
    jQuery(function($) {
        $('.slider').slick({
            prevArrow: $('.arrows .prev'),
            nextArrow: $('.arrows .next')
        })
    });
</script>
<?php get_footer(); ?>