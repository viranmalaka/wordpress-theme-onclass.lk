<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package SKT Movers Packers
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>

   <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/onclass/favicon.ico" />
</head>

<body <?php body_class(''); ?>>
<div id="pagefixed">
    <!-- end .headertop -->
    <div class="header <?php if (!is_front_page() && !is_home()) { ?>innerheader<?php } ?>">
        <div class="container">
            <div class="logo">
<!--                --><?php //movers_packers_the_custom_logo(); ?>
<!--                <a href="--><?php //echo esc_url(home_url('/app')); ?><!--"><h1>--><?php //bloginfo('name'); ?><!--</h1></a>-->
<!--                <p>--><?php //bloginfo('description'); ?><!--</p>-->
               <a href="/app"><img width="200" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/onclass/logo.png" alt="https://onclass.lk"></a>
            </div><!-- logo -->
            <div class="header_right">

                <?php if (!dynamic_sidebar('header-info')) : ?>
                    <div class="headerinfo">

                        <div class="headcol-1">
                            <span>Find Us On</span>
                            <div class="social-icons">
                                <a title="facebook" class="fb" target="_blank"
                                   href="<?php echo esc_url(get_theme_mod('fb_link', '#facebook')); ?>"></a>
                                <a title="twitter" class="tw" target="_blank"
                                   href="<?php echo esc_url(get_theme_mod('twitt_link', '#twitter')); ?>"></a>
                                <a title="google-plus" class="gp" target="_blank"
                                   href="<?php echo esc_url(get_theme_mod('gplus_link', '#gplus')); ?>"></a>
                                <a title="linkedin" class="in" target="_blank"
                                   href="<?php echo esc_url(get_theme_mod('linked_link', '#linkedin')); ?>"></a>
                            </div>
                        </div>

                        <div class="headcol-2">
                                <span><?php echo esc_attr(get_theme_mod('callus_title', __('Call Us', 'movers-packers'))); ?></span>
                                <p>071 5721626</p> <p>077 9988420</p>
                        </div>

                        <div class="headcol-3">
                            <span>Email Us</span>
                            <a href="mailto:onclasslk@gmail.com">onclasslk@gmail.com</a>
                        </div>
                        <div class="clear"></div>

                    </div>
                <?php endif; // end sidebar widget area ?>


                <div class="clear"></div>
            </div><!-- header_right -->
            <div class="clear"></div>
        </div><!-- container -->
    </div><!--.header -->
    <div class="menubar">
        <div class="toggle">
            <a class="toggleMenu" href="<?php echo esc_url('#'); ?>"><?php _e('Menu', 'movers-packers'); ?></a>
        </div><!-- toggle -->
        <div class="sitenav">
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            <div class="getaquote">
                <ul>
                    <li>
                        <a href="/app" style="color: black">>> Go To APP</a>
                    </li>
                </ul>
            </div>
        </div><!-- site-nav -->
    </div><!--end .menubar -->

    <?php if (is_front_page() && is_home()) { ?>
        <!-- Slider Section -->
        <?php for ($sld = 7; $sld < 10; $sld++) { ?>
            <?php if (get_theme_mod('page-setting' . $sld)) { ?>
                <?php $slidequery = new WP_query('page_id=' . get_theme_mod('page-setting' . $sld, true)); ?>
                <?php while ($slidequery->have_posts()) : $slidequery->the_post();
                    $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    $img_arr[] = $image;
                    $id_arr[] = $post->ID;
                endwhile;
            }
        }
        ?>
        <?php if (!empty($id_arr)) { ?>
            <?php if (get_theme_mod('hide_slides') == '') { ?>
                <section id="home_slider">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <?php
                            $i = 1;
                            foreach ($img_arr as $url) { ?>
                                <img src="<?php echo esc_url($url); ?>" title="#slidecaption<?php echo $i; ?>"/>
                                <?php $i++;
                            } ?>
                        </div>
                        <?php
                        $i = 1;
                        foreach ($id_arr as $id) {
                            $title = get_the_title($id);
                            $post = get_post($id);
                            $content = apply_filters('the_content', substr(strip_tags($post->post_content), 0, 150));
                            ?>
                            <div id="slidecaption<?php echo $i; ?>" class="nivo-html-caption">
                                <div class="slide_info">
                                    <h2><?php echo $title; ?></h2>
                                    <?php echo $content; ?>
                                    <div class="clear"></div>
                                    <div class="slide_more"><a
                                            href="<?php the_permalink(); ?>"><?php esc_attr_e('Read More', 'movers-packers'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;
                        } ?>
                    </div>
                    <div class="clear"></div>
                </section>
            <?php } ?>
        <?php } else { ?>
            <?php if (get_theme_mod('hide_slides') == '') { ?>
                <section id="home_slider">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slides/slider1.jpg"
                                 alt="" title="#slidecaption1"/>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slides/slider2.jpg"
                                 alt="" title="#slidecaption2"/>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slides/slider3.jpg"
                                 alt="" title="#slidecaption3"/>
                        </div>
                        <div id="slidecaption1" class="nivo-html-caption">
                            <div class="slide_info">
                                <h2>Save your <span>time</span></h2>
                                <p style="font-weight:bold;">බස් එකේ, වාහනේ යන ගමන් Revision කරන්න ලංකාවේ ජනප්‍රියම Class ගොඩක් දැන් ඔබේ Smart Phone එකට.</p>
                            </div>
                        </div>

                        <div id="slidecaption2" class="nivo-html-caption">
                            <div class="slide_info">
                                <h2>Save your <span>money</span></h2>
                                <p style="font-weight:bold;">Class ගොඩකට යන සල්ලි ඉතුරු කරගෙන Smart Phone එකෙන් Class යන්න ලංකාවේ ජනප්‍රියම ගුරුවරුන් සියල්ලම එකම තැනක</p
                                ></div>
                        </div>

                        <div id="slidecaption3" class="nivo-html-caption">
                            <div class="slide_info">
                                <h2>Save your <span>energy</span></h2>
                                <p style="font-weight:bold;">දුර ගෙවාගෙන Class ගිය කාලෙ ඉවරයි. දැන් ගෙදර ඉදන්ම Class යන්න onClass.lk</p
                                ></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
            <?php } ?>
        <?php } ?>
        <!-- Slider Section -->
        <?php if (get_theme_mod('hide_choose') == '') { ?>
            <section id="wrapfirst">
                <div class="container">
                    <div class="welcomewrap">
                        <?php if (get_theme_mod('page-setting1')) { ?>
                            <?php $queryvar = new WP_query('page_id=' . get_theme_mod('page-setting1', true)); ?>
                            <?php while ($queryvar->have_posts()) : $queryvar->the_post(); ?>
                                <?php the_post_thumbnail(array(570, 380, true)); ?>
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                                <div class="clear"></div>
                            <?php endwhile;
                        } else { ?>
                            <h2><?php esc_attr_e('Why Choose Us', 'movers-packers'); ?></h2>
                            <p>ශ්‍රී ලංකාව පුරා විසිරී සිටින උපකාරක පංති ගුරුවරුන් සහ සිසුන් අතර නවතම ආකාරයේ අධ්‍යාපනික
                                ජාලයක් නිර්මාණය කිරීම onClass.lk හි මූලික පරමාර්ථයයි. දුර බැහැර සිටින සිසු දූ දරුවන්ට
                                පවා දිවයින පුරා විසිරී සිටින උපකාරක පංති ගුරුවරුන්ගේ ඉගෙනුම් ආධාරක ලබාගැනීමට කදිම
                                වේදිකාවක් ලෙස onClass.lk හඳුන්වාදිය හැක. ඕනෑම තරාතිරමක දරුවකුට දැරිය හැකි මුදලකට
                                onClass.lk තොරතුරු පද්ධතිය හා සම්බන්ධවිය හැකිය.</p>
                        <?php } ?>

                    </div><!-- welcomewrap-->
                    <div class="clear"></div>
                </div><!-- container -->
            </section>
        <?php } ?>
        <?php if (get_theme_mod('hide_column') == '') { ?>
            <div id="pagearea">
            <div class="container">
                
                <div class="threebox">
                    <a href="https://docs.google.com/document/d/1e0_sXoIJtM6QYCje_Qu5-lsknIIZQ9em5a1fBH4J30Y/edit?usp=sharing"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/onclass/marketing/4.png" alt=""></a>
                 </div>
                <div class="threebox">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/onclass/marketing/1.png" alt="">
                 </div>
                <div class="threebox">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/onclass/marketing/3.png" alt="">
                 </div>
                <div class="clear"></div>
            </div><!-- .container -->
            </div><?php } ?><!-- #pagearea -->

        <?php
    } elseif (is_front_page()) {
        ?>
        <!-- Slider Section -->
        <?php for ($sld = 7; $sld < 10; $sld++) { ?>
            <?php if (get_theme_mod('page-setting' . $sld)) { ?>
                <?php $slidequery = new WP_query('page_id=' . get_theme_mod('page-setting' . $sld, true)); ?>
                <?php while ($slidequery->have_posts()) : $slidequery->the_post();
                    $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    $img_arr[] = $image;
                    $id_arr[] = $post->ID;
                endwhile;
            }
        }
        ?>
        <?php if (!empty($id_arr)) { ?>
            <?php if (get_theme_mod('hide_slides') == '') { ?>
                <section id="home_slider">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slides/slider1.jpg"
                                 alt="" title="#slidecaption1"/>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slides/slider2.jpg"
                                 alt="" title="#slidecaption2"/>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slides/slider3.jpg"
                                 alt="" title="#slidecaption3"/>
                        </div>
                        <div id="slidecaption1" class="nivo-html-caption">
                            <div class="slide_info">
                                <h2>Save your <span>time</span></h2>
                                <p style="font-weight:bold;">බස් එකේ, වාහනේ යන ගමන් Revision කරන්න ලංකාවේ ජනප්‍රියම Class ගොඩක් දැන් ඔබේ Smart Phone එකට.</p>
                            </div>
                        </div>

                        <div id="slidecaption2" class="nivo-html-caption">
                            <div class="slide_info">
                                <h2>Save your <span>money</span></h2>
                                <p style="font-weight:bold;">Class ගොඩකට යන සල්ලි ඉතුරු කරගෙන Smart Phone එකෙන් Class යන්න ලංකාවේ ජනප්‍රියම ගුරුවරුන් සියල්ලම එකම තැනක</p
                                ></div>
                        </div>

                        <div id="slidecaption3" class="nivo-html-caption">
                            <div class="slide_info">
                                <h2>Save your <span>energy</span></h2>
                                <p style="font-weight:bold;">දුර ගෙවාගෙන Class ගිය කාලෙ ඉවරයි. දැන් ගෙදර ඉදන්ම Class යන්න onClass.lk</p
                                ></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
            <?php } ?>
        <?php } else { ?>
            <?php if (get_theme_mod('hide_slides') == '') { ?>
                <section id="home_slider">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slides/slider1.jpg"
                                 alt="" title="#slidecaption1"/>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slides/slider2.jpg"
                                 alt="" title="#slidecaption2"/>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slides/slider3.jpg"
                                 alt="" title="#slidecaption3"/>
                        </div>
                        <div id="slidecaption1" class="nivo-html-caption">
                            <div class="slide_info">
                                <h2>Save your <span>time</span></h2>
                                <p style="font-weight:bold;">බස් එකේ, වාහනේ යන ගමන් Revision කරන්න ලංකාවේ ජනප්‍රියම Class ගොඩක් දැන් ඔබේ Smart Phone එකට.</p>
                            </div>
                        </div>

                        <div id="slidecaption2" class="nivo-html-caption">
                            <div class="slide_info">
                                <h2>Save your <span>money</span></h2>
                                <p style="font-weight:bold;">Class ගොඩකට යන සල්ලි ඉතුරු කරගෙන Smart Phone එකෙන් Class යන්න ලංකාවේ ජනප්‍රියම ගුරුවරුන් සියල්ලම එකම තැනක</p
                                ></div>
                        </div>

                        <div id="slidecaption3" class="nivo-html-caption">
                            <div class="slide_info">
                                <h2>Save your <span>energy</span></h2>
                                <p style="font-weight:bold;">දුර ගෙවාගෙන Class ගිය කාලෙ ඉවරයි. දැන් ගෙදර ඉදන්ම Class යන්න onClass.lk</p
                                ></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
            <?php } ?>
        <?php } ?>
        <!-- Slider Section -->
        <?php if (get_theme_mod('hide_choose') == '') { ?>
            <section id="wrapfirst">
                <div class="container">
                    <div class="welcomewrap">
                        <?php if (get_theme_mod('page-setting1')) { ?>
                            <?php $queryvar = new WP_query('page_id=' . get_theme_mod('page-setting1', true)); ?>
                            <?php while ($queryvar->have_posts()) : $queryvar->the_post(); ?>
                                <?php the_post_thumbnail(array(570, 380, true)); ?>
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                                <div class="clear"></div>
                            <?php endwhile;
                        } else { ?>
                            <h2><?php esc_attr_e('Why Choose Us', 'movers-packers'); ?></h2>
                            <p>ශ්‍රී ලංකාව පුරා විසිරී සිටින උපකාරක පංති ගුරුවරුන් සහ සිසුන් අතර නවතම ආකාරයේ අධ්‍යාපනික
                                ජාලයක් නිර්මාණය කිරීම onClass.lk හි මූලික පරමාර්ථයයි. දුර බැහැර සිටින සිසු දූ දරුවන්ට
                                පවා දිවයින පුරා විසිරී සිටින උපකාරක පංති ගුරුවරුන්ගේ ඉගෙනුම් ආධාරක ලබාගැනීමට කදිම
                                වේදිකාවක් ලෙස onClass.lk හඳුන්වාදිය හැක. ඕනෑම තරාතිරමක දරුවකුට දැරිය හැකි මුදලකට
                                onClass.lk තොරතුරු පද්ධතිය හා සම්බන්ධවිය හැකිය.</p>
                        <?php } ?>

                    </div><!-- welcomewrap-->
                    <div class="clear"></div>
                </div><!-- container -->
            </section>
        <?php } ?>
        <?php if (get_theme_mod('hide_column') == '') { ?>
    <div id="pagearea">
        <div class="container">
            <div class="threebox">
                <a href="https://docs.google.com/document/d/1e0_sXoIJtM6QYCje_Qu5-lsknIIZQ9em5a1fBH4J30Y/edit?usp=sharing"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/onclass/marketing/4.png" alt=""></a>
            </div>
            <div class="threebox">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/onclass/marketing/1.png" alt="">
            </div>
            <div class="threebox">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/onclass/marketing/3.png" alt="">
            </div>
            <div class="clear"></div>
  </div>  <!-- .container -->
            </div><?php } ?><!-- #pagearea -->
        <?php
    } elseif (is_home()) {
        ?>
        <section id="home_slider" style="display:none;"></section>
        <section id="wrapfirst" style="display:none;"></section>
        <section id="pagearea" style="display:none;"></section>
        <?php
    }
    ?>