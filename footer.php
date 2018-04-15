<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Movers Packers
 */
?>
<div id="footer-wrapper">
    <div class="container footerfix">
        <div class="fixed3">
            <div class="addressbx">
                <?php if ('' !== get_theme_mod('contact_title')) { ?>
                    <span>Facebook :</span>
                <?php } ?>
                <a title="facebook" class="fb" target="_blank"
                   href="<?php echo esc_url(get_theme_mod('fb_link', '#facebook')); ?>">facebook.com/onclass.lk</a>
            </div>
        </div>
        <div class="fixed3">
            <div class="phonebx">
                <span>Call Us:</span>
                <p>071 5721626</p>
                <p>077 9988420</p>
            </div>
        </div>
        <div class="fixed3 last_column">
            <div class="emailbx">
                <span>Email Us:</span>
                <a href="mailto:onclasslk@gmail.com">onclasslk@gmail.com</a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!--end .container-->

    <div class="container">
        <div class="cols-3 widget-column-1">
            <h5>About Us</h5>
            <p>ශ්‍රී ලංකාව පුරා විසිරී සිටින උපකාරක පංති ගුරුවරුන් සහ සිසුන් අතර නවතම ආකාරයේ අධ්‍යාපනික ජාලයක් නිර්මාණය
                කිරීම onClass.lk හි මූලික පරමාර්ථයයි. දුර බැහැර සිටින සිසු දූ දරුවන්ට පවා දිවයින පුරා විසිරී සිටින
                උපකාරක පංති ගුරුවරුන්ගේ ඉගෙනුම් ආධාරක ලබාගැනීමට කදිම වේදිකාවක් ලෙස onClass.lk හඳුන්වාදිය හැක. ඕනෑම
                තරාතිරමක දරුවකුට දැරිය හැකි මුදලකට onClass.lk තොරතුරු පද්ධතිය හා සම්බන්ධවිය හැකිය.</p>
        </div>
        <!--end .widget-column-1-->
        <div class="cols-3 widget-column-2">
            <h5>Links</h5>
            <div class="menu">
                <?php wp_nav_menu(array('theme_location' => 'footer', 'depth' => 1)); ?>
            </div>
        </div>
        <!--end .widget-column-2-->

        <div class="cols-3 widget-column-3">
            <h5>Feature Post</h5>
            <div class="recent-post"><a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) {
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                        $thumbnailSrc = $src[0]; ?>
                        <img src="<?php echo esc_url($thumbnailSrc); ?>" alt="" width="60" height="auto">
                    <?php } else { ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_404.png"
                             width="60"/>
                    <?php } ?>
                </a> <?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>"><span>
        <?php esc_attr_e('Read more', 'movers-packers'); ?>
        </span></a></div>
        </div>
        <!--end .widget-column-3-->

        <div class="clear"></div>
    </div>
    <!--end .container-->
    <div class="copyright-wrapper">
        <div class="container">
            <div class="copyright-txt"><?php esc_attr_e('&copy; 2018'); ?> onClass.lk
                . All Rights Reserved</div>
            <div
                class="design-by"><a href="https://onclass.lk" rel="nofollow">OnClass.lk Team</a></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
<!--end #pagefixed-->
<?php wp_footer(); ?>
</body></html>