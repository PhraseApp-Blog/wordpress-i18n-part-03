            <!-- footer -->
            <footer class="footer" role="contentinfo">

                <!-- copyright -->
                <p class="footer__copyright">
                    &copy;
                    <?php echo esc_html(date('Y')); ?>

                    <?php printf(
                        __('Copyright 2019 %s', 'handmadestale'),
                        get_bloginfo('name')
                    ); ?>

                    <?php echo __('Powered by', 'handmadestale'); ?>
                    <a href="//wordpress.org" target="_blank">
                        <?php echo __('WordPress'); ?>
                    </a>.
                </p>
                <!-- /copyright -->

            </footer>
            <!-- /footer -->

        </div>
        <!-- /wrapper -->

        <?php wp_footer(); ?>

    </body>
</html>