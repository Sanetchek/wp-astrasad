</main>
<footer id="footer" class="wavegrid">
    <div class="container">
        <div class="copyrights">
            <section>
                <?php
                $company_name = get_option('footer_company_name');
                $all_rights = get_option('footer_all_rights');
                $site_email = get_option('site_email');
                $site_telephone1 = get_option('site_telephone1');
                $site_telephone2 = get_option('site_telephone2'); 
                ?>
                <div><?php _e($company_name); ?></div>
                <div><?php _e($all_rights); ?></div>
            </section>
        </div>
        <div class="footer-contact-info">
            <ul>
                <li>
                    <a href="mailto:<?php echo $site_email ?>"><?php echo $site_email ?></a>
                </li>
                <li>
                    <a href="tel:<?php echo $site_telephone1 ?>"><?php echo $site_telephone1 ?></a>
                </li>
                <li>
                    <a href="tel:<?php echo $site_telephone2 ?>"><?php echo $site_telephone2 ?></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</footer>

<script type="text/javascript">
    jQuery(document).ready(function ($){

        $('#toggle-button img').bind('click',function(){

            if ( $('#toggle-button img').attr('src') === '<?php bloginfo("template_url"); ?>/images/menu.svg' ) {
                $('#toggle-button img').attr('src', "<?php bloginfo('template_url'); ?>/images/cross.svg");
            } else {
                $('#toggle-button img').attr('src', "<?php bloginfo('template_url'); ?>/images/menu.svg");
            }

            $('#toggle-nav-menu').slideToggle("slow");
            return false;
        });
    });
</script>

<?php wp_footer(); ?>
</body>
</html>