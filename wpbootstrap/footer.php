    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <!-- End page header -->
            <div class="row">
                <div class="col-xs-5 contact-left">
                    <h3>地址</h3>
                    <address>
                        广东省深圳市南山区蛇口街道南山大厦<br>
                        邮编 510323
                    </address>
                </div>
                <div class="col-xs-5 contact-left">
                    <h3>电话 / 传真</h3>
                    <p>电话 : +1234567890 </p>
                    <p>传真 : +1234567890 </p>
                    <p>Email : <a href="mailto:info@example.com">info@mycompany.com</a> </p>
                </div>
                <div class="col-xs-2 ftr-gd">
                    <h3>关注我们</h3>
                    <img src="<?php bloginfo('template_url'); ?>/images/qr.png" class="img-responsive" alt="image">
                </div>
                <div class="clearfix"></div>
                <p class="text-center">&copy; Copyright @ <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>
</html>