
<footer role="contentinfo">
    <div class="footer">

        <div class="footer-hd">
            <div class="wrapper">
                <div class="buffer">
                    <div class="footerUtility">
                        <div class="footerUtility-account">

                            <div class="footerUtility-account-branding">

                                <?php $f_top_logo = cs_get_option('footer-top-logo'); ?>
                                  <?php if($f_top_logo) : ?>

                                     <img src="<?php echo $f_top_logo; ?>" width="307" alt="Schwan's Rewards" />

                                <?php else : ?>
                                    
                                   <img src="<?php echo get_template_directory_uri(); ?>/img/schwans-rewards.svg" width="307" alt="Schwan's Rewards" />

                                <?php endif; ?>
                                
                                 
                             
                            </div>
                            
                            <div class="footerUtility-account-bd footerUtility-account-bd_compact">

                                <?php $f_top_content = cs_get_option('footer-top-content'); ?>
                                <?php if($f_top_content) : ?>

                                <?php echo $f_top_content; ?>

                                <?php else : ?>
                                    
                                 Earn points worth 5&#37; back from every online purchase

                                <?php endif; ?>
                               
                            </div>

                            <div class="footerUtility-account-cta">

                                <?php $ft_button_text = cs_get_option('footer-top-button-text'); 
                                 $ft_button_link = cs_get_option('footer-top-button-link'); ?>

                                  <?php if($ft_button_text && $ft_button_link) : ?>
                                    
                                  <?php echo '<a href="'.$ft_button_link.'" class="btn btn_secondary">'.$ft_button_text.'</a>'; ?>

                                <?php else : ?>
                                    
                                 <a href="#" class="btn btn_secondary">Enroll For Free</a>

                                <?php endif; ?>
                                
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bd">
            <div class="wrapper">

                <div class="footerUtility">
                    <div class="footerUtility-menu">
                        <h3 class="isVisuallyHidden">Footer Navigation</h3>
                        <?php dynamic_sidebar('footer-sidebar-left'); ?>
                    </div>
                    <div class="footerUtility-social">
                        <div class="buffer">
                            <div class="footerSocial">
                                <?php dynamic_sidebar('footer-sidebar-right'); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-ft">
            <div class="wrapper">
                <div class="buffer">

                <?php $copy_right_text =  cs_get_option('copy_right'); ?>
                <?php if($copy_right_text) : ?>
                <p><?php echo $copy_right_text; ?> </p>
                <?php else : ?>
                    copy right section
                <?php endif; ?>

                  
                </div>
            </div>
        </div>
    </div>
</footer>

     <?php $ganalytics = cs_get_option('ganalytics'); ?>
      <?php if($ganalytics) : ?>
      <script>
         (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
               (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
               m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
         })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

         ga('create', '<?php echo $ganalytics; ?>', 'auto');
         ga('send', 'pageview');
      </script>
    <?php endif; ?>
    
	<?php wp_footer(); ?>
</body>
</html>
